@include('header.headerlink')

<div class="unit-5 overlay" style="background-image: url('../asset/images/hero_1.jpg');">
    <div class="container text-center">
        <h2 class="mb-0">{{__('connact.connact')}}</h2>

    </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">

                <form action="{{route('store-message')}}" method="POST" class="p-5 bg-white">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">{{__('connact.fullname')}}</label>
                            <input type="text" id="fullname" name="name" class="form-control"
                                placeholder="{{__('connact.fullname')}}">
                        </div>
                    </div>
                    @error('name')
                    <span class="alert-danger">{{$message}}</span>
                    @enderror
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">{{__('connact.email')}}</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="{{__('connact.email')}}">
                        </div>
                    </div>
                    @error('email')
                    <span class="alert-danger">{{$message}}</span>
                    @enderror

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="phone">{{__('connact.phone')}}</label>
                            <input type="text" id="phone" name="phone" class="form-control"
                                placeholder="{{__('connact.phone')}}">
                        </div>
                    </div>
                    @error('phone')
                    <span class="alert-danger">{{$message}}</span>
                    @enderror
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="message">{{__('connact.message')}}</label>
                            <textarea id="message" name="message" cols="30" rows="5" class="form-control"
                                placeholder="{{__('connact.message')}}"></textarea>
                        </div>
                    </div>
                    @error('message')
                    <span class="alert-danger">{{$message}}</span>
                    @enderror
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="{{__('connact.send')}}" class="btn btn-primary pill px-4 py-2">
                        </div>
                    </div>


                </form>
            </div>

            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">{{__('connact.connactinfo')}}</h3>
                    <p class="mb-0 font-weight-bold">{{__('connact.address')}}</p>
                    <p class="mb-4">203{{__('connact.address_detail')}}</p>

                    <p class="mb-0 font-weight-bold">{{__('connact.phone')}}</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold">{{__('connact.email')}}</p>
                    <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                </div>

                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">{{__('connact.more_info')}}</h3>
                    <p>{{__('connact.info_data')}}</p>
                    <p><a href="{{route('index_about')}}"
                            class="btn btn-primary px-4 py-2 text-white pill">{{__('connact.more')}}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 
    <div class=" p quick-contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div>
              <h2><span class="icon-room"></span> Location</h2>
              <p class="mb-0">New York - 2398 <br>  10 Hadson Carl Street</p>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h2><span class="icon-clock-o"></span> Service Times</h2>
              <p class="mb-0">Wednesdays at 6:30PM - 7:30PM <br>
              Fridays at Sunset - 7:30PM <br>
              Saturdays at 8:00AM - Sunset</p>
            </div>
          </div>
          <div class="col-md-4">
            <h2><span class="icon-comments"></span> Get In Touch</h2>
            <p class="mb-0">Email: info@yoursite.com <br>
            Phone: (123) 3240-345-9348 </p>
          </div>
        </div>
      </div>
    </div> -->
@include('footer.footer')