@include('header.headerlink')
<h2 class="text-center">{{__('team.Add_team')}}</h2>
    <div class="container col-6">
<form action="{{route('Team.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
          
            <div class="form-group text-center">
            <label for="exampleInputEmail1">{{__('home.name')}}</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('name')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror


         <div class="form-group text-center">
            <label for="exampleInputEmail1">{{__('home.jop')}}</label>
            <input type="text" class="form-control" name="jop" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('jop')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror


         
         <div class="form-group">
    <label for="exampleFormControlTextarea1">image:name</label>
    <input type="file" name="image">
  </div>

  @error('image')
<span class="alert-danger">{{$message}}</span>
  @enderror

        <button type="submit" class="btn btn-primary">{{__('home.submit')}}</button>
</form>
</div>