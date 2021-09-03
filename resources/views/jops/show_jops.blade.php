@include('header.headerlink')

<div class="table-responsive mt-5">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>salary</th>
                                <th>location</th>
                                <th>category</th>
                                <th>description</th>                        
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($jops as $jop)
                                <td>{{$jop->id}}</td>
                                <td>{{$jop->jop_name}}</td>
                                <td>{{$jop->salary}}</td>
                                <td>{{$jop->location}}</td>
                                <td>{{$categroy_name->category}}</td>
                                <td>{{$jop->jop_description}}</td>
                               
                    
                                <td><a href="{{route('jop.edit',['id'=> $jop->id])}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                <form action="{{route('jop.destroy',['id'=> $jop->id])}}" method="post">
                              @csrf
                               {{method_field('delete')}}
                             <button type="submit" class="btn btn-danger"> Delete</button>
                                 </form>
                                </td>
                            </tr>
                            @endforeach
                            
 
                        </tbody>
                    </table>
                </div>




