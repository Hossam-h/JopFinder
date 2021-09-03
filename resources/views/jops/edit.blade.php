@include('header.headerlink')

<form action="{{route('jop.update',['id'=>$edit->id])}}" method="post" class="p-5 bg-white">
              @csrf
            {{method_field('PUT')}}
              <div class="row form-group">
                <div class="col-md-12"><h3>Edit Name </h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                 <input type="text" name="jop_name" class="form-control" value="{{$edit->jop_name}}" placeholder='add qusetion'>
                </div>
              </div>

              @error('jop_name')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

            
              <div class="row form-group">
                <div class="col-md-12"><h3>salary</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input name="salary" value="{{$edit->salary}}" class="form-control" id="" cols="30" rows="5">
                </div>
              </div>

              @error('salary')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

            <div class="row form-group">
                <div class="col-md-12"><h3>location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input name="location" value="{{$edit->location}}" class="form-control" id="" cols="30" rows="5">
                </div>
              </div>

              @error('location')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

            <div class="row form-group">
                <div class="col-md-12"><h3>Select category</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                 <select name="categore_id" class="form-control" id="">
                @foreach($all_category as $category)
                 <option value="{{$category->id}}">{{$category->category}}</option>
                 @endforeach
                 </select>
                </div>
              </div>

              @error('location')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

          
            <div class="row form-group">
                <div class="col-md-12"><h3>description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="jop_description" value="{{$edit->jop_description}}" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>

              @error('jop_description')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror


              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update about us" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>