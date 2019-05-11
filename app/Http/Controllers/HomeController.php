<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeItem;




class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $homeItems = HomeItem::all();
        return view('admin.home.index',compact("homeItems")); 
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
    public function edit($id)
    {
        //
        $homeItem = HomeItem::find($id);
        return view('admin.home.edit',compact("homeItem"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $homeItem = HomeItem::find($id);
        
        // dd($request->path); 
        // $tempPath = $request->file('path');
        // $tempPath = ;
        // die();

        $photoName = "homePhoto_" . $homeItem->id;
        if($request->file('path') != null)
            $request->file('path')->storeAs('storage/home/',$photoName);

        $path = "storage/home/" . $photoName;
        
       
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'path' => $path
        ];

        $homeItem->update($data);
        
        return redirect()-> route('admin.home.index');
        
        //
        // HomePhoto homePhoto;
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
