@include('header.headerlink')
<h2 class="text-center">Update category</h2>
    <div class="container col-6">
<form action="{{route('update_category',['id'=>$edit_cat->id])}}" method="POST">
                  @csrf
          
            <div class="form-group text-center">
            <label for="exampleInputEmail1">update Name</label>
            <input type="text" value="{{$edit_cat->category}}"class="form-control" name="category"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('category')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror


         
         <div class="form-group text-center">
            <label for="exampleInputEmail1"> تعديل اسم الفئة</label>
            <input type="text" class="form-control" name="category_ar"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('category')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror

         <div class="form-group text-center">
            <label for="exampleInputEmail1">update Icon</label>
            <input type="text" class="form-control" name="icon"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('icon')
         <div>
        <span class="alert alert-danger">{{$message}}</span>
         </div> 
         @enderror


        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>