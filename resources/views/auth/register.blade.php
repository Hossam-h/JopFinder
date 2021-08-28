@include('header.headerlink')
<div class="container col-sm-8 col-lg-6 ">
<form action="{{url('register')}}" method="post">
    @csrf
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter Name">
  </div>

  @error('name')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  @error('email')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Email_type</label>
    <select class="form-control" name='email_type' id="exampleFormControlSelect1">
      <option>Company</option>
      <option>Personal</option>
      
    </select>
  </div>
  @error('type_email')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  @error('password')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

  <div class="form-group">
    <label for="exampleInputPassword1">Password verify</label>
    <input type="password" class="form-control" name ="password_confirmation" id="exampleInputPassword1" placeholder="Password">
  </div>
  @error('password_confirmation')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>