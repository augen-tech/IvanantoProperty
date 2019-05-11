<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries = Gallery::all();
        return view('admin.gallery.index',compact("galleries")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gallery.create'); 
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
        // $galleries = Gallery::find($id);
        
        // dd($request->path); 
        // $tempPath = $request->file('path');
        // $tempPath = ;
        // die();
        $count = Gallery::count() + 1;
        $photoName = "galleryPhoto_" . $request->file('path')->getClientOriginalName();
        if($request->file('path') != null)
            $request->file('path')->storeAs('public/storage/gallery/',$photoName);

        $path = "public/storage/gallery/" . $photoName;
        
       
        $data = [
            'title' => $request->title,
            'category' => $request->category,
            'path' => $path
        ];

        Gallery::create($data);
        
        return redirect()-> route('admin.gallery.index');
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
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit',compact("gallery"));
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
        $gallery = Gallery::find($id);
        // dd($request->file('path')->getClientOriginalName()); 
        // dd($request->path); 
        // $tempPath = $request->file('path');
        // $tempPath = ;
        // die();

        $photoName = "galleryPhoto_" . $request->file('path')->getClientOriginalName();
        if($request->file('path') != null)
            $request->file('path')->storeAs('gallery/',$photoName);

        $path = "gallery/" . $photoName;
        
       
        $data = [
            'title' => $request->title,
            'category' => $request->category,
            'path' => $path
        ];

        $gallery->update($data);
        
        return redirect()-> route('admin.gallery.index');
        
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
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->route('admin.gallery.index',0);
    }
}
