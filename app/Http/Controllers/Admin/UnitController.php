<?php

namespace App\Http\Controllers\Admin;

use App\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();
        return view('backend.unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.unit.create');
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
            'name' => 'required|unique:units',
            //'url' => 'required|unique:units',
            //'image' => 'required|image|mimes:jpeg,bmp,png,jpg,gif'
        ]);


        $unit = new Unit();
        $unit->name = $request->name;
        $unit->save();
        Toastr::success('unit Successfully Saved :)' ,'Success');
        return redirect()->route('admin.unit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        return view('backend.unit.edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        $this->validate($request,[
            'name' => 'required',
            // 'url' => 'required',
            // 'image' => 'required|image|mimes:jpeg,bmp,png,jpg,gif'
        ]);

        $unit->name = $request->name;
        $unit->save();
        Toastr::success('unit Successfully Updated :)' ,'Success');
        return redirect()->route('admin.unit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        Toastr::success('unit Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
