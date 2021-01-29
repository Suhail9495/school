@extends('layouts.master')

@section('content')
<table class="table table-striped">
                                    <thead>
                                      <tr>
                                        {{-- <th>ID</th> --}}
                                         <th >Student Name</th>
                                        <th >Father Name</th>
                                        <th>Address</th>
                                        <th >Phone Number</th>
                                        <th>Adhar Number</th>
                                        <th >Class</th>
                                        <th>Mediuam</th>
                                        <th  >Action</th>
                                      </tr>
                                    </thead>
                                  <tbody>
                                         
                                         
                                      @foreach($event as $tap)
                                      <tr>
                                        {{-- <td>{{$tap->id}}</td> --}}
                                        <td>{{$tap->sname}}</td>
                                        <td>{{$tap->fname}}</td>
                                        <td>{{$tap->address}}</td>
                                        <td>{{$tap->no}}</td>
                                        <td>{{$tap->adhar}}</td>
                                        <td>{{$tap->class}}</td>
                                        <td>{{$tap->med}}</td>
                                       
                                                                                
                                       

                                     <td>
                                          <form action="{{action('rcontroller@destroy',$tap->id)}}" method="post">
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