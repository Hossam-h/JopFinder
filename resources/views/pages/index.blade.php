@include('header.headerlink')  


<div >
<p class="text-center text-success">{{session('success')}}</p>
</div>
    <div class="site-blocks-cover overlay" style="background-image: url('../asset/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1>{{__('home.find_jop')}}</h1>
            <form action="{{route('search')}}">
              <div class="row mb-3">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <input type="text" id="jop_name" name="jop_name" class="mr-3 form-control border-0 px-4" placeholder="{{__('home.jop')}}">
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <div class="input-wrap">
                        <span class="icon icon-room"></span>
                      <input type="text" id="city_name" name="city" class="form-control  form-control-block search-input  border-0 px-4"  placeholder="{{__('home.city')}}">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <input type="submit" class="btn btn-search btn-primary btn-block" value="{{__('home.search')}}">
                </div>
              </div>
              
            </form>
          </div>
        
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3 mb-md-0" id='result'></div> 
<!-- start table search-->


<div class="table-responsive">
      <h3 class="text-center">{{__('home.total_data')}} <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>{{__('home.city')}}</th>
         <th>{{__('home.jop')}}</th>
         <th>{{__('home.company')}}</th>
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    
<!-- end table search-->
    <div class="site-section" id="categ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">{{__('home.popular_categories')}}</h2>
          </div>
        </div>
        <div class="row">
        @foreach($categores as $category) 
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
          
          <a href="{{route('show_category',['id'=>$category->id])}}" class="h-100 feature-item">
          <i class="fas {{$category->icon}}" style='font-size:30px; padding-bottom:30px'></i>
              <h2>{{$category->category}}</h2>
              <span class="counting">{{$category->jops->count()}}</span>
            </a>

          </div>
          @endforeach
         
        </div>

      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 " data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">{{__('home.recent_jop')}}</h2>
            <div class="rounded border jobs-wrap">

                @foreach($jops as $jop)
              <a href="{{route('jop_detail',['id'=>$jop->id])}}" class="job-item d-block d-md-flex align-items-center fulltime">
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                <img src="{{asset('asset/images/company_logo_blank.png')}}" alt="Image" class="img-fluid mx-auto">
                </div>
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>{{$jop->jop_name}}</h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span>{{$jop->company_name}}</div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> {{$jop->location}}</div>
                      <div><span class="icon-money mr-1"></span> {{$jop->salary}}</div>
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class="text-info p-2 rounded border border-info">{{__('jop.detail')}}</span>
                  </div>
                </div>  
              </a>
                  
              @endforeach

            </div>

            <div class="col-md-12 text-center mt-5">
              <a href="{{Route('showall')}}" class="btn btn-primary rounded py-3 px-5">
                <span class="icon-plus-circle"></span> {{__('home.more_jop')}}</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!--start testemonial-->
<div class="testemonial-titel" id="testemonial">
  <h2 class="text-center">{{__('home.testimonies')}}</h2>
</div>
<div class="testemonial">
  <div class="overlay"></div>

  
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
     
      <div class="carousel-inner">
        
      <div class="carousel-item active">
          <img src="{{asset('asset/images/active.jpg')}}" class="d-block" alt="...">
          <div class="carousel-caption  d-sm-block">
            <h5>{{__('home.Mohamed')}}</h5>
            <p>{{__('home.testo_body')}}</p>
          </div>
        </div>
    
@foreach($testemoniales as $testemoniale)
        <div class="carousel-item">
          <img src="{{asset('images/testemonial').'/'. $testemoniale->image}}" class="d-block" alt="...">
          <div class="carousel-caption  d-sm-block">
          
          <h5> {{$testemoniale->name}}</h5>
            <p>{{$testemoniale->opinion}}</p>
          </div>
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

</div>
<!--End testemonial-->

    <div class="site-blocks-cover overlay inner-page" style="background-image: url('/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">{{__('home.dream_jop')}}</h1>
            <p class="h3 text-white mb-5">{{__('home.wait_you')}}</p>
            <p><a href="{{route('showall')}}" class="btn btn-outline-warning py-3 px-4">{{__('home.find_jop')}}</a> </p>
            <p><a href="{{route('testemonial.create')}}" class="btn btn-outline-warning py-3 px-4">{{__('home.add_testemonail')}}</a> </p>
            
          </div>
        </div>
      </div>
    </div>

    

    <div id="Serv"  class="site-section site-block-feature bg-light">
      <div class="container">
        
        <div class="text-center mb-5 section-heading">
          <h2 >{{__('home.our_services')}}</h2>
        </div>

        <div class="row text-center  border-bottom">
 @foreach($all_service as $service) 
          <div class=" ml-70 text-center col-lg-5    border-right"  style="margin-left:50px;">
            
            <i class="fas {{$service->icon}} display-3 mb-3 d-block text-primary"></i>
            <h2 class="h4">{{$service->tittle}}</h2>
            <p>{{$service->description}}</p>
          
          </div>
 @endforeach() 
          
        </div>

          
        </div>
      </div>
    </div>

    
    

    @include('footer.footer')

   