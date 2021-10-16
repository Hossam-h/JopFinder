@include('header.headerlink')



<h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>{{__('home.name')}}</th>
                                <th>{{__('home.jop')}}</th>
                                <th>image</th>                        
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($all_team as $team)
                                <td>{{$team->id}}</td>
                                <td>{{$team->name}}</td>
                                <td>{{$team->jop}}</td>
                                <td>
                                    <img src="{{asset('images/team') .'/'. $team -> image}}" height="70px" width="70px" alt="">
                               </td>

                                <td><a href="{{route('Team.edit',['Team'=> $team->id])}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                <form action="{{route('Team.destroy',['Team'=> $team->id])}}" method="post">
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
