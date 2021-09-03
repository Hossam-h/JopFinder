@include('header.headerlink')



<h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>jop</th>
                                                       
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($applies_jop as $apply)
                                <td>{{$apply->id}}</td>
                                <td>{{$apply->name}}</td>
                                <td>{{$apply->email}}</td>
                                
                                <td>
                                <form action="{{route('delete_relation',['id'=>$apply->id .$jop_id])}}" method="post">
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
