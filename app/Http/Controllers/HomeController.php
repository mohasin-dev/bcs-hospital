<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Department;
use App\Appoinment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $departments = Department::all();
        return view('frontend.home', compact('departments'));
    }
    public function contact_page()
    {
        return view('frontend.contact');
    }
    public function about_page()
    {
        return view('frontend.about');
    }
    public function constitutions_page()
    {
        return view('frontend.constitutions');
    }
    public function services_page()
    {
        return view('frontend.services');
    }
    public function service_details_page()
    {
        return view('frontend.serviceDetails');
    }
    public function gallery_page()
    {
        return view('frontend.gallery');
    }
    public function blog_page()
    {
        return view('frontend.blog');
    }
    public function blog_details_page()
    {
        return view('frontend.blogDetails');
    }
    public function donate_page()
    {
        return view('frontend.donate');
    }
    public function member_list_page()
    {
        return view('frontend.memberList');
    }
    public function member_list_page1()
    {
        return view('frontend.memberlist1');
    }
    public function doctor_page()
    {
        return view('frontend.doctor');
    }
    public function doctor_details_page()
    {
        return view('frontend.doctorDetails');
    }
    public function staff_page()
    {
        return view('frontend.staff');
    }
    public function carrer()
    {
        return view('frontend.carrer');
    }
    public function membershipForm()
    {
        return view('frontend.membershipForm');
    }
    public function appoinment(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'mobile_number' => 'required',
            'age' => 'required',
            'appoinment_date' => 'required',
            'department_id' => 'required',
        ]);
        //print_r($request->all());
        $appoinment = new Appoinment();
        $appoinment->name = $request->name;
        $appoinment->email = $request->email;
        $appoinment->mobile_number = $request->mobile_number;
        $appoinment->age = $request->age;
        $appoinment->appoinment_date = $request->appoinment_date;
        $appoinment->department_id = $request->department_id;
        $appoinment->subject = $request->subject;
        $appoinment->message = $request->message;
        $appoinment->save();

        Toastr::success('Your Appoinment Has Taken:)' ,'Success');
        return back();
    }
}
