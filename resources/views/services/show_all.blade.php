@include('header.headerlink')



<h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>tittle</th>
                                <th>icon</th>
                                <th>description</th>                        
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($all_service as $service)
                                <td>{{$service->id}}</td>
                                <td>{{$service->tittle}}</td>
                                <td>{{$service->icon}}</td>
                                <td>{{$service->description}}</td>
                                <td><a href="{{route('services.edit',['service'=> $service->id])}}" class="btn btn-warning">{{__('home.edit')}}</a></td>
                                <td>
                                <form action="{{route('services.destroy',['service'=> $service->id])}}" method="post">
                              @csrf
                               {{method_field('delete')}}
                             <button type="submit" class="btn btn-danger"> {{__('home.delete')}}</button>
                                 </form>
                                </td>
                            </tr>
                            @endforeach
                            
 
                        </tbody>
                    </table>
                </div>




