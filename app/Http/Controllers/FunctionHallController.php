<?php

namespace App\Http\Controllers;

use App\Models\FunctionHall;
use Illuminate\Http\Request;

class FunctionHallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.function-hall.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.function-hall.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'              => ['required', 'string'],
            'price'              => ['required', 'numeric'],
        ]);

        FunctionHall::create([
            'title'                      =>              $request->title,
            'price'                      =>              $request->price,
        ]);

        return redirect('/admin/function-hall')->with('message','Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FunctionHall  $functionHall
     * @return \Illuminate\Http\Response
     */
    public function show(FunctionHall $functionHall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FunctionHall  $functionHall
     * @return \Illuminate\Http\Response
     */
    public function edit(FunctionHall $functionHall)
    {
        return view('admin.function-hall.edit', compact('functionHall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FunctionHall  $functionHall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FunctionHall $functionHall)
    {
        $request->validate([
            'title'                         =>      'required|string',
            'price'                         =>      'required|numeric',
        ]);

        $functionHall->update([
            'title'                     =>      $request->title,
            'price'                     =>      $request->price,
        ]);

        return redirect('/admin/function-hall')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FunctionHall  $functionHall
     * @return \Illuminate\Http\Response
     */
    public function destroy(FunctionHall $functionHall)
    {
        //
    }
}
