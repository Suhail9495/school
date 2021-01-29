@extends('layouts.master')

@section('content')
<table class="table table-striped">
                                    <thead>
                                      <tr>
                                        {{-- <th>ID</th> --}}
                                         <th >Name</th>
                                        <th >Role</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th  >Action</th>
                                      </tr>
                                    </thead>
                                  <tbody>
                                         
                                         
                                      @foreach($event as $tap)
                                      <tr>
                                        {{-- <td>{{$tap->id}}</td> --}}
                                        <td>{{$tap->name}}</td>
                                        <td>{{$tap->role}}</td>
                                        <td>{{$tap->description}}</td>
                                                                                
                                        <td><img height="50px" width="50px" src="{{ asset('uploads/say/'.$tap->image) }}"></td>


                                     <td>
                                          <form action="{{action('saycontroller@destroy',$tap->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                           <button onclick="if (confirm('Are you sure..?')) commentDelete(1); return false" class="btn btn-danger"  type="submit">Delete</button>
                                          </form>

                                        </td>
                                      </tr>
                                      @endforeach
                                    </tbody> 

                                  </table>
@endsection