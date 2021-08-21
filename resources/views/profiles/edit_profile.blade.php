@include('header.headerlink')

<form action="{{route('update_profile',['id'=>$edit->id])}}" method="post" enctype="multipart/form-data" >
     @csrf 
     {{method_field('PUT')}}
<div class="form-group" >
    <label for="exampleInputEmail1">Name</label>
    <input type="text" value="{{$edit->name}}" class="form-control" name="name"  placeholder="Enter Name">
  </div>

  <!-- @error('name')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror -->

<!--your gender-->
  <div class="form-group">
    <label for="exampleInputEmail1">Gender</label>

    <label class="btn btn-secondary">
    <input type="radio"  name="gender" value="{{$edit->gender}}" id="option2"> mail
  </label>

  <label class="btn btn-secondary">
    <input type="radio" name="gender" value="{{$edit->gender}}" id="option3"> femail
  </label>

  </div>
  @error('gender')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror
  
   <!--status -->
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select class="form-control" value="{{$edit->status}}" name='status' id="exampleFormControlSelect1">
      <option>Married</option>
      <option>Single</option>
    </select>
  </div>
  @error('status')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

<div class="form-group">
    <label for="exampleFormControlSelect1">Education Degree</label>
    <select class="form-control" value="{{$edit->education_degree}}" name='education_degree' id="exampleFormControlSelect1">
      <option>bachelor</option>
      <option>Dibloma</option>
      <option>Doctor</option>
      <option>Other</option>
    </select>
  </div>
  @error('education_degree')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

<div class="form-group">
    <img src="" height="300px" width="300px" alt="">

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">image:name</label>
    <input type="file" value="{{$edit->image}}" name="image">
  </div>

  @error('user_id')
<span class="alert-danger">{{$message}}</span>
  @enderror



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
