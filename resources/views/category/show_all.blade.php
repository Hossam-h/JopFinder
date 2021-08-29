@include('header.headerlink')



<h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>icon</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($all_category as $cat)
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->category}}</td>
                                <td>{{$cat->icon}}</td>
                                
                               
                                <td><a href="{{route('edit_category',['id'=> $cat->id])}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                <form action="{{route('destroy_category',['id'=> $cat->id])}}" method="post">
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




