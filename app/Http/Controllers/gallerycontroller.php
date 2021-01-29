<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;

class gallerycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $event=Gallery::orderBy('id','DESC')->get();
         
        return view('gallery.index',compact('event'));
       }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('gallery.create');
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

        
        'name'=>'required',
        
        

    ];

    $this->validate($request,$rules);
     $image = new Gallery();
            if ($request->hasFile('image')) {
                $dir = 'uploads/Gallery';
                $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
                $fileName = str_random() . '.' . $extension; // rename image
                $request->file('image')->move($dir, $fileName);
                $image->image = $fileName;
            }

    
            $image->name=$request->name;

             // $image->price=$request->price;
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
       $turf=Gallery::find($id);
        $file = public_path('uploads/Gallery/'.$turf->image);
        if (file_exists($file)){
            unlink($file);
        }
       $turf->delete();

        return redirect()->back()->with('Warning','Successfully Deleted');

    }
  
}
