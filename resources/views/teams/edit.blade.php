@include('header.headerlink')
<h2 class="text-center">Add to team</h2>
    <div class="container col-6">
<form action="{{route('Team.update',['Team'=>$edit->id])}}" method="POST" enctype="multipart/form-data">
                  @csrf
        {{method_field('PUT')}}
            <div class="form-group text-center">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" value="{{$edit->name}}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('name')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror


         <div class="form-group text-center">
            <label for="exampleInputEmail1">Jop</label>
            <input type="text" class="form-control" value="{{$edit->jop}}"name="jop" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('jop')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror

         <img src="{{asset('images/team') .'/'. $edit -> image}}" height="70px" width="70px" alt="">
         
         <div class="form-group">
    <label for="exampleFormControlTextarea1">image:name</label>
    <input type="file" name="image">
  </div>

  @error('image')
<span class="alert-danger">{{$message}}</span>
  @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>