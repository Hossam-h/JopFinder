@include('header.headerlink')

<h2 class="text-center">Add category</h2>
    <div class="container col-6">
<form action="{{route('store_category')}}" method="POST">
                  @csrf
          
            <div class="form-group text-center">
            <label for="exampleInputEmail1">Category name</label>
            <input type="text" class="form-control" name="category"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('category')
         <div>
        <span> {{$message}} </span>
         </div> 
         @enderror


        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>