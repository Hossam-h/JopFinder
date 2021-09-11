@include('header.headerlink')

<h2 class="text-center">Add category</h2>
    <div class="container col-6">
<form action="{{route('services.store')}}" method="POST">
                  @csrf
          
            <div class="form-group text-center">
            <label for="exampleInputEmail1">Tittle</label>
            <input type="text" class="form-control" name="tittle"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('tittle')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror

<!--tittle in Ar-->
<div class="form-group text-center">
            <label for="exampleInputEmail1">Tittle Ar</label>
            <input type="text" class="form-control" name="tittle_ar"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('tittle')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror


         <div class="form-group text-center">
            <label for="exampleInputEmail1">Icon</label>
            <input type="text" class="form-control" name="icon"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('icon')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror

         <div class="form-group text-center">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" name="description" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('description')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror
<!--descript in Ar-->
<div class="form-group text-center">
            <label for="exampleInputEmail1">Description Ar</label>
            <input type="text" class="form-control" name="description_ar" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('description')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror

        <button type="submit" class="btn btn-primary">{{__('home.add')}}</button>
</form>
</div>