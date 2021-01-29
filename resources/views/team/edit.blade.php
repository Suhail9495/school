@extends('layouts.master')
@section('page','Edit')
@section('content')
                   


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <div   class="card" >
                      
                        <div class="body" >
                            <form method="post" action="{{action('achdcontroller@update', $id)}}" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <input name="_method" type="hidden" value="PATCH">
                                <label for="email_address">Title</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="title" value="{{$turf['title']}}"  class="form-control" placeholder="Title">
                                    </div>
                                </div>
                          
                                <label for="password">Image</label>
                                 <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="image" class="form-control" value="{{$turf['image']}}" >
                                        <label>{{$turf['image']}}</label><br><br>
                                    </div>
                                </div>


                                
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
@endsection                                
