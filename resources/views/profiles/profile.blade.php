@include('header.headerlink')

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