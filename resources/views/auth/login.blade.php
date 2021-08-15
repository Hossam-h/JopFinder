@include('header.headerlink')

<h2 class="text-center">Login</h2>
    <div class="container col-6">
               <form action="{{url('login')}}" method="POST">
                  @csrf
          
            <div class="form-group text-center">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email"id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        @error('email')
         <div>
        <span> {{$message}} </span>
         </div> 
         @enderror

         

        <div class="form-group text-center">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
         <div>
             <span> {{$message}} </span>
         </div> 
         @enderror
        
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
    <label class="form-check-label" for="exampleCheck1">remember</label>
  </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>