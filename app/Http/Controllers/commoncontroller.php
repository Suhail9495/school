<?php

namespace App\Http\Controllers;
use App\Gallery;
use App\Event;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Input;

use App\Say;

class commoncontroller extends Controller
{
    public function index(){


      $event=Event::orderBy('id','DESC')->get();
      $say=Say::orderBy('id','DESC')->get();


    	return view('index',compact('event','say'));


    }

    public function galler(){





           $count =DB::table('galleries')->count();
         $event=Gallery::orderBy('id','DESC')->get();

    	return view('gallery',compact('event','count'));

    } 

    public function contact(){

    	return view('contact');
    } 
 

  public function search(){


      $id=Input::get('search2');


      if(DB::table('events')->where('id',$id)->exists()){


      	$tap = DB::table('events')->find($id);
  	 
  	 return view('details',compact('tap'));


      }
      else{

      	return redirect('/')->with('Warning','Please Choose Your Currect Id');

      	
      
      

  }


}


}
