@include('header.headerlink')
<div class="container col-sm-8 col-lg-6 ">
<form action="{{url('register')}}" method="post">
    @csrf
<div class="form-group">
    <label for="exampleInputEmail1">{{__('register.name')}}</label>
    <input type="text" class="form-control" name="name"  placeholder="{{__('register.name')}}">
  </div>

  @error('name')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

  <div class="form-group">
    <label for="exampleInputEmail1">{{__('register.email')}}</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{__('register.enter_email')}}">
  </div>
  @error('email')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">{{__('register.email_type')}}</label>
    <select class="form-control" name='email_type' id="exampleFormControlSelect1">
      <option>{{__('register.company')}}</option>
      <option>{{__('register.personal')}}</option>
      
    </select>
  </div>
  @error('type_email')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

  <div class="form-group">
    <label for="exampleInputPassword1">{{__('register.password')}}</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="{{__('register.password')}}">
  </div>
  @error('password')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

  <div class="form-group">
    <label for="exampleInputPassword1">{{__('register.password_verify')}}</label>
    <input type="password" class="form-control" name ="password_confirmation" id="exampleInputPassword1" placeholder="{{__('register.password_verify')}}">
  </div>
  @error('password_confirmation')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">{{__('register.submit')}}</button>
</form>
</div>