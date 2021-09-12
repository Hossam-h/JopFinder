@include('header.headerlink')
<div class="container col-6">
<form action="{{route('testemonial.store')}}" method="post" class="p-5 bg-white" enctype="multipart/form-data">
              @csrf
        
              <div class="row form-group">
                <div class="col-md-12"><h3>Name </h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                 <input type="text" name="name" class="form-control" placeholder='add qusetion'>
                </div>
              </div>

              @error('name')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror
<!--name in ar-->
        <div class="row form-group">
                        <div class="col-md-12"><h3>Name in Ar </h3></div>
                        <div class="col-md-12 mb-3 mb-md-0">
                        <input type="text" name="name_ar" class="form-control" placeholder='add qusetion'>
                        </div>
                    </div>

                    @error('name')
                    <span class="alert alert-danger">{{$message}}</span>
                    @enderror

            
              <div class="row form-group">
                <div class="col-md-12"><h3>Opinion</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="opinion" value="" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>

              @error('opinion')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

          
            <div class="row form-group">
                <div class="col-md-12"><h3>Opinion in Ar</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="opinion_ar" value="" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>

              @error('opinion')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror


            <div class="row form-group">
                <div class="col-md-12"><h3>image</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="file" name="image" value="" id=""  rows="5">
                </div>
              </div>

              @error('image')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror


              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Create Question" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>
            </div>