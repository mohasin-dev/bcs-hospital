<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Tag;
use App\Post;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('backend.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.post.create',compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);
        $image = $request->file('image');
        $title_check = $request->title;
        if(Post::where('title', $title_check)->exists()){
           $slug = str_slug($request->title.'-'.str_random(5));
        }else{
            $slug = str_slug($request->title);

        }
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/post/small_image/'.$filename);
            Image::make($image)->resize(450, 267)->save($location);

            $location2 = public_path('images/post/large_image/'.$filename);
            Image::make($image)->resize(650, 467)->save($location2);
        }else{
            $filename = 'post.png';
        }
        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $filename;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();

        $post->tags()->attach($request->tags);

        Toastr::success('Post Successfully Saved :)','Success');
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('backend.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.post.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'image',
            'category_id' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);
        $image = $request->file('image');
        $title_check = $request->title;
        if(Post::where('title', $title_check)->exists()){
           $slug = str_slug($request->title.'-'.str_random(5));
        }else{
            $slug = str_slug($request->title);

        }
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('image')) {
            if(File::exists('images/post/small_image/'.$post->image)){
                File::delete('images/post/small_image/'.$post->image);
               }
            $image = $request->file('image');
            $filename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/post/small_image/'.$filename);
            Image::make($image)->resize(450, 267)->save($location);

            if(File::exists('images/post/large_image/'.$post->image)){
                File::delete('images/post/large_image/'.$post->image);
               }
            $location2 = public_path('images/post/large_image/'.$filename);
            Image::make($image)->resize(650, 467)->save($location2);
            $post->image = $filename;
        }

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();

        $post->tags()->sync($request->tags);

        Toastr::success('Post Successfully Updated :)','Success');
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(File::exists('images/post/small_image/'.$post->image))
        {
        File::delete('images/post/small_image/'.$post->image);
        }
        if(File::exists('images/post/large_image/'.$post->image))
        {
        File::delete('images/post/large_image/'.$post->image);
        }
        $post->tags()->detach();
        $post->delete();
        Toastr::success('Post Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
