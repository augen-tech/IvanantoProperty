<?php

namespace App\Http\Controllers;

use App\MegaText;
use Illuminate\Http\Request;


class MegaTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $megatexts = MegaText::all();
        return view('admin.megatext.index',compact("megatexts")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MegaText  $megaText
     * @return \Illuminate\Http\Response
     */
    public function show(MegaText $megaText)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MegaText  $megaText
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $megatext = MegaText::find($id);
        return view('admin.megatext.edit',compact("megatext"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MegaText  $megaText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $megaText = MegaText::find($id);
              
        
        $data = $request->all();
    
        $megaText->update($data);
        // Session::flash('flash_message', 'Task successfully added!');
    
        return redirect()->route('admin.megatext.index',0);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MegaText  $megaText
     * @return \Illuminate\Http\Response
     */
    public function destroy(MegaText $megaText)
    {
        //
    }
}
