<?php

namespace App\Http\Controllers\Admin;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Department;
use App\Degree;
use App\Specialist;
use App\Designation;
use Carbon\Carbon;
use Image;
use File;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('backend.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $degrees = Degree::all();
        $Specialists = Specialist::all();
        $designations = Designation::all();
        return view('backend.doctor.create', compact('departments', 'degrees', 'Specialists', 'designations'));
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
            $location = public_path('images/doctor/'.$filename);
            Image::make($image)->resize(200, 300)->save($location);
        }else{
            $filename = 'doctor.jpg';
        }

        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->image = $filename;
        $doctor->department_id = $request->department_id;
        $doctor->designation_id = $request->designation_id;
        $doctor->save();

        $doctor->degrees()->attach($request->degrees);
        $doctor->specialists()->attach($request->specialists);

        Toastr::success('doctor Successfully Saved :)' ,'Success');
        return redirect()->route('admin.doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $departments = Department::all();
        $degrees = Degree::all();
        $Specialists = Specialist::all();
        $designations = Designation::all();
        return view('backend.doctor.edit', compact('doctor', 'departments', 'degrees', 'Specialists', 'designations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //print_r($request->all());
        $image = $request->file('image');
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('image')) {
            if(File::exists('images/doctor/'.$doctor->image)){
                File::delete('images/doctor/'.$doctor->image);
               }
            $image = $request->file('image');
            $filename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/doctor/'.$filename);
            Image::make($image)->resize(200, 300)->save($location);
        }else{
            $filename = 'doctor.jpg';
        }

        $doctor->name = $request->name;
        $doctor->image = $filename;
        $doctor->department_id = $request->department_id;
        $doctor->designation_id = $request->designation_id;
        $doctor->save();

        $doctor->degrees()->sync($request->degrees);
        $doctor->specialists()->sync($request->specialists);

        Toastr::success('doctor Successfully Updated :)' ,'Success');
        return redirect()->route('admin.doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        if(File::exists('images/doctor/' .$doctor->image)){
            File::delete('images/doctor/' .$doctor->image);
        }

        $doctor->degrees()->detach();
        $doctor->specialists()->detach();
        $doctor->delete();
        Toastr::success('Doctor Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
