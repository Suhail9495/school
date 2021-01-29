<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Say;

class saycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $event=Say::orderBy('id','DESC')->get();
        return view('say.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('say.create');
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

        'description'=>'required',
        'name'=>'required',
        'role'=>'required',
        
        

    ];

    $this->validate($request,$rules);
     $image = new Say();
            if ($request->hasFile('image')) {
                $dir = 'uploads/say';
                $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
                $fileName = str_random() . '.' . $extension; // rename image
                $request->file('image')->move($dir, $fileName);
                $image->image = $fileName;
            }

            $image->description=$request->description;
            $image->name=$request->name;
            $image->role=$request->role;

             
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
        $turf=Say::find($id);
        $file = public_path('uploads/say/'.$turf->image);
        if (file_exists($file)){
            unlink($file);
        }
       $turf->delete();

        return redirect()->back()->with('Warning','Successfully Deleted');
    }
}
