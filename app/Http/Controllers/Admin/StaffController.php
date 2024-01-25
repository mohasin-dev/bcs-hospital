<?php

namespace App\Http\Controllers\Admin;

use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Designation;
use Carbon\Carbon;
use Image;
use File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('backend.staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designations = Designation::all();
        return view('backend.staff.create', compact('designations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //print_r($request->all());
        $image = $request->file('image');
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/staff/'.$filename);
            Image::make($image)->resize(200, 300)->save($location);
        }else{
            $filename = 'staff.jpg';
        }

        $staff = new Staff();
        $staff->name = $request->name;
        $staff->image = $filename;
        $staff->designation_id = $request->designation_id;
        $staff->save();

        Toastr::success('staff Successfully Saved :)' ,'Success');
        return redirect()->route('admin.staff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(staff $staff)
    {
        $designations = Designation::all();
        return view('backend.staff.edit', compact('staff', 'designations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        //print_r($request->all());
        $image = $request->file('image');
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('image')) {
            if(File::exists('images/staff/'.$staff->image)){
                File::delete('images/staff/'.$staff->image);
               }
            $image = $request->file('image');
            $filename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/staff/'.$filename);
            Image::make($image)->resize(200, 300)->save($location);
        }else{
            $filename = 'staff.jpg';
        }

        $staff->name = $request->name;
        $staff->image = $filename;
        $staff->designation_id = $request->designation_id;
        $staff->save();

        Toastr::success('staff Successfully Updated :)' ,'Success');
        return redirect()->route('admin.staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(staff $staff)
    {
        if(File::exists('images/staff/' .$staff->image)){
            File::delete('images/staff/' .$staff->image);
        }
        $staff->delete();
        Toastr::success('staff Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
