@include('header.headerlink')  

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
    <div class="site-section">
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
          <div class="col-md-8 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
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
          <div class="col-md-4 block-16" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex mb-0">
              <h2 class="mb-5 h3 mb-0">{{__('home.feature_jop')}}</h2>
              <div class="ml-auto mt-1"><a href="#" class="owl-custom-prev">Prev</a> / <a href="#" class="owl-custom-next">Next</a></div>
            </div>

            <div class="nonloop-block-16 owl-carousel">

              
              @foreach($jops as $jop)
              <div class="border rounded p-4 bg-white">
                <h2 class="h5">{{$jop->jop_name}} </h2>
                
                <p>
                  <span class="d-block"><span class="icon-suitcase"></span>{{$jop->company_name}}</span>
                  <span class="d-block"><span class="icon-room"></span>{{$jop->location}}</span>
                  <span class="d-block"><span class="icon-money mr-1"></span>{{$jop->salary}}</span>
                </p>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at ipsum commodi hic, cum esse asperiores libero molestiae, perferendis consectetur assumenda iusto, dolorem nemo maiores magnam illo laborum sit, dicta.</p>
              </div>
              @endforeach
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="{{asset('images/hero_2.jpg')}}" alt="Image" class="img-fluid rounded">
                </a>
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <div class="text-left mb-5 section-heading">
              <h2>{{__('home.testimonies')}}</h2>
            </div>

            <p class="mb-4 h5 font-italic lineheight1-5">{{__('home.body_testimonies')}}</p>
            <p>&mdash; <strong class="text-black font-weight-bold">John Holmes</strong>, Marketing Strategist</p>
            <p><a href="https://vimeo.com/28959265" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-blocks-cover overlay inner-page" style="background-image: url('images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">{{__('home.dream_jop')}}</h1>
            <p class="h3 text-white mb-5">{{__('home.wait_you')}}</p>
            <p><a href="{{route('showall')}}" class="btn btn-outline-warning py-3 px-4">{{__('home.find_jop')}}</a> </p>
            
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        
        <div class="text-center mb-5 section-heading">
          <h2>{{__('home.our_services')}}</h2>
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

   