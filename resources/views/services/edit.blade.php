@include('header.headerlink')

<h2 class="text-center">Add category</h2>
    <div class="container col-6">
<form action="{{route('services.update',['service'=>$edit->id])}}" method="POST">
                  @csrf
          {{method_field('PUT')}}
            <div class="form-group text-center">
            <label for="exampleInputEmail1">Tittle</label>
            <input type="text" value='{{$edit->tittle}}' class="form-control" name="tittle"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('tittle')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror

         <div class="form-group text-center">
            <label for="exampleInputEmail1">Icon</label>
            <input type="text" value='{{$edit->icon}}' class="form-control" name="icon"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('icon')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror

         <div class="form-group text-center">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" value='{{$edit->description}}' class="form-control" name="description" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('description')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror


        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>