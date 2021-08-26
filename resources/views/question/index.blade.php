@include('header.headerlink')



<h2>Section title</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>question</th>
                                <th>Answer</th>
                                <th>Edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($all_qusetion as $query)
                                <td>{{$query->id}}</td>
                                <td>{{$query->question}}</td>
                                <td>{{$query->answer}}</td>
                                
                               
                                <td><a href="{{route('question.edit',['question'=> $query->id])}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                <form action="{{route('question.destroy',['question'=> $query->id])}}" method="post">
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




