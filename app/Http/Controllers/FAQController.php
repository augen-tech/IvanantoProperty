<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FAQ;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faqs = FAQ::all();
        return view('admin.faq.index',compact("faqs")); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.faq.create'); 
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
        $count = FAQ::count() + 1;
        
       
        $data = [
            'question' => $request->question,
            'answer' => $request->answer
            
        ];

        FAQ::create($data);
        
        return redirect()-> route('admin.faq.index');
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
        $faq = FAQ::find($id);
        return view('admin.faq.edit',compact("faq"));
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
        $faq = FAQ::find($id);
              
        
        $data = $request->all();
    
        $faq->update($data);
        // Session::flash('flash_message', 'Task successfully added!');
    
        return redirect()->route('admin.faq.index',0);
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
        $faq = FAQ::find($id);
        $faq->delete();
        return redirect()->route('admin.faq.index',0);
    }
}
