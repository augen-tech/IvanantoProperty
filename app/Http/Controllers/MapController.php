<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $maps = Map::all();
        return view('admin.map.index',compact("maps")); 
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
        $map = Map::find($id);
        return view('admin.map.edit',compact("map"));
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
        $map = Map::find($id);
        
        // dd($request->path); 
        // $tempPath = $request->file('path');
        // $tempPath = ;
        // die();

        $photoName = "mapPhoto_" . $map->id;
        if($request->file('path') != null)
            $request->file('path')->storeAs('public/storage/map/',$photoName);

        $path = "public/storage/map/" . $photoName;
        
       
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'path' => $path
        ];

        $map->update($data);
        
        return redirect()-> route('admin.dashboard');
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
