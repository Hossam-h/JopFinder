@include('header.headerlink')



<h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                
                                <th>jop name</th>
                                <th>salary</th>
                                <th>company</th> 
                                <th>location</th>                        
                                
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if($applies)
                            @foreach($applies as $apply)
                                <td>{{$apply->jop_name}}</td>
                                <td>{{$apply->salary}}</td>
                                <td>{{$apply->company_name}}</td>
                                <td>{{$apply->location}}</td>
                                
                            
                                <td>
                                <form action="{{route('delete_apply',['id'=>$apply->id])}}" method="post">
                              @csrf
                               {{method_field('delete')}}
                             <button type="submit" class="btn btn-danger"> Delete</button>
                                 </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
 
                        </tbody>
                    </table>
                </div>




