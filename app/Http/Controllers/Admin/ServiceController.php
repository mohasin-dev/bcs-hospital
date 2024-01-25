<?php
namespace App\Http\Controllers\Admin;
use App\Service;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Image;
use File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('backend.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
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
            'title' => 'required|unique:services',
        ]);

        $image = $request->file('image');
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/service/'.$filename);
            Image::make($image)->resize(600, 350)->save($location);
        }else{
            $filename = 'service.png';
        }
        $service = new Service();
        $service->title = $request->title;
        $slug = str_slug($request->title);
        $service->slug = $slug;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        $service->service_icon = $request->service_icon;
        $service->image = $filename;
        $service->save();
        Toastr::success('Service Successfully Saved :)' ,'Success');
        return redirect()->route('admin.service.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backend.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $image = $request->file('image');
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('image')) {
            if(File::exists('images/service/'.$service->image)){
                File::delete('images/service/'.$service->image);
               }
            $image = $request->file('image');
            $filename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/service/'.$filename);
            Image::make($image)->resize(600, 350)->save($location);
            $service->image = $filename;
        }
        $service->title = $request->title;
        $slug = str_slug($request->title);
        $service->slug = $slug;
        $service->short_description = $request->short_description;
        $service->description = $request->description;
        $service->service_icon = $request->service_icon;
        $service->save();
        Toastr::success('Service Successfully Updated :)' ,'Success');
        return redirect()->route('admin.service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if(File::exists('images/service/'.$service->image)){
            File::delete('images/service/'.$service->image);
           }
        $service->delete();
        Toastr::success('service Successfully Updated :)','Success');
        return redirect()->back();
    }
}
