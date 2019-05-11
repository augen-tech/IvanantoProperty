<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Benefit;
use App\Blockquote;
use App\Contact;
use App\HomeItem;
use App\MegaText;
use App\FAQ;
use App\Video;
use App\Map;
use App\Gallery;
use App\Logo;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $benefits = Benefit::all();
        $blockquotes = Blockquote::all();
        $contacts = Contact::find(1);
        $homeItems = HomeItem::all();
        $megatexts = MegaText::all();
        $faqs = FAQ::all();
        $videos = Video::find(1);
        $maps = Map::find(1);
        $galleries = Gallery::all();
        $logo = Logo::find(1);
        return view('app',compact("benefits","blockquotes","contacts","homeItems","megatexts","faqs","videos","maps","galleries","logo")); 
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
