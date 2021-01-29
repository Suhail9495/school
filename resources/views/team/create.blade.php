@extends('layouts.master')
@section('content')



  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

           @if(Session::has('status'))
<p class="alert alert-info">{{ Session::get('status') }}</p>
@endif
 


           
                                          
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <div   class="card" >
                      
                        <div class="body" >
                            <form method="post" action="{{url('team')}}" enctype="multipart/form-data">
                              {{csrf_field()}}

                              <label for="email_address">Name </label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" required="" name="name" required="" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <label for="email_address">Position</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" required="" name="position" required="" class="form-control" placeholder="Position">
                                    </div>
                                </div>
                          
                                <label for="password">Image</label>
                                 <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="image" class="form-control" required="" placeholder="Enter your Description">
                                    </div>
                                </div>
                              


                                
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
         
                                    
                         
@endsection
