
@include('header.headerlink')

<form action="{{route('update_about',['id'=>$edit->id])}}" method="post" class="p-5 bg-white" enctype="multipart/form-data">
              @csrf
<div class="row form-group">
                <div class="col-md-12"><h3>Job Description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="about_us" value="{{$edit->about_us}}" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>
              @error('about_us')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

          
                <div class="m-2 ">
                  <input type="file" value="" class="" name="image">  
                </div>
            


              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update about us" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>