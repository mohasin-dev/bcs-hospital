<?php

namespace App\Http\Controllers\Admin;

use App\Specialist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SpecialistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialists = Specialist::all();
        return view('backend.specialist.index', compact('specialists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.specialist.create');
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
        $specialist = new Specialist();
        $specialist->name = $request->name;
        $specialist->slug = str_slug($request->name);
        $specialist->save();
        Toastr::success('Specialist Successfully Saved :)' ,'Success');
        return redirect()->route('admin.specialist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Specialist  $specialist
     * @return \Illuminate\Http\Response
     */
    public function show(Specialist $specialist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Specialist  $specialist
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialist $specialist)
    {
        return view('backend.specialist.edit', compact('specialist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Specialist  $specialist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialist $specialist)
    {
        $specialist->name = $request->name;
        $specialist->slug = str_slug($request->name);
        $specialist->save();
        Toastr::success('Specialist Successfully Updated :)' ,'Success');
        return redirect()->route('admin.specialist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Specialist  $specialist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialist $specialist)
    {
        $specialist->delete();
        Toastr::success($specialist->name.' Successfully Deleted :)','Success');
        return back();
    }
}
