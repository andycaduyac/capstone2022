<?php

namespace App\Http\Controllers;

use App\Models\Cottage;
use Illuminate\Http\Request;

class CottageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cottage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cottage.create');
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

        Cottage::create([
            'title'                      =>              $request->title,
            'price'                      =>              $request->price,
        ]);

        return redirect('/admin/cottages')->with('message','Added Successfully');
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
    public function edit(Cottage $cottage)
    {
        return view('admin.cottage.edit', compact('cottage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cottage $cottage)
    {
        $request->validate([
            'title'                         =>      'required|string',
            'price'                         =>      'required|numeric',
        ]);

        $cottage->update([
            'title'                     =>      $request->title,
            'price'                     =>      $request->price,
        ]);

        return redirect('/admin/cottages')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
