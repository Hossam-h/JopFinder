@include('header.headerlink')


@if(isset($own_profile->id))
<div class="container">
    
  <div class="name">
    <img src="{{asset('images/team').'/'.$own_profile->image}}" alt="" width='300px' height='300px' style='border-radius:50%;'>
    </div>

  <div class="name">
    <h1>Name:{{$own_profile->name}}</h1>
    </div>

    <div class="name">
    <h5>Gender:{{$own_profile->gender}}</h5>
    </div>
    <div class="name">
    <h5>status:{{$own_profile->status}}</h5>
    </div>
    <div class="name">
    <h5>Education degree:{{$own_profile->education_degree}}</h5>
    </div>
</div>

                                
                  <form style='margin:15px; display:inline-block' action="{{route('delete_profile',['id'=>$own_profile->id])}}" method="POST">
                     @csrf
                     {{ method_field('DELETE') }} 


                  <button type="submit" class="btn btn-danger"> Delete</button>
                </form>

                <a href="{{route('edit_profile',['id'=>$own_profile->id])}}"  style='margin:15px;' class="btn btn-warning">Edit</a>
       
                          
@else
  <h3>Sorry You don't have a profile</h3>

@endif


@include('footer.footer')