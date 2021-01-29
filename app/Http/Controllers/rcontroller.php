<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regi;

class rcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $event=Regi::orderBy('id','DESC')->get();
        return view('event.ex1',compact('event'));
    // return view('event.ex1');
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
         $rules=[

       
        
        

    ];
    

    $this->validate($request,$rules);
     $image = new Regi();
        
            $image->fname=$request->fname;
            $image->sname=$request->sname;
            $image->address=$request->address;
            $image->no=$request->no;
            $image->birth=$request->birth;
            $image->adhar=$request->adhar;
            $image->class=$request->class;
            $image->med=$request->med;
             $image->save();

             return redirect()->back()->with('status','Successfully uploaded');

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
