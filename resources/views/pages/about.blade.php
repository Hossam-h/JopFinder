@include('header.headerlink')  
  
    <div class="unit-5 overlay" style="background-image: url('../asset/images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">About Us</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>About Us</span></p>
      </div>
    </div>

    
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                
                  <span class="icon-wrap">
                
                  </span>
                  <img src=" {{asset('images/team').'/'.$about_us->image}}" alt="Image" class="img-fluid rounded">
                
              
              </div>
            
          </div>
          <div class="col-md-5 ml-auto">
            <div class="text-left mb-5 section-heading">
              <h2>About Us</h2>
            </div>

            <p class="mb-4 h5 font-italic lineheight1-5">&ldquo;
            {{$about_us->about_us}}  
            &rdquo;</p>
      
            
            <p><a href="https://vimeo.com/28959265" class="popup-vimeo text-uppercase">Watch Video <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <!-- <div class="col-md-7 text-center"> -->
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
              <h2 class="mb-5">The Team</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
            </div>
            
          <!-- </div> -->
        </div>
        <div class="row team">
          @foreach( $all_team as $team)
          <div class="col-lg-2 col-md-4 col-sm-6 col-12" data-aos="fade" data-aos-delay="300">
            <a href="#" class="person">
              <img src="{{asset('images/team') .'/'. $team->image}}" height="180px" alt="Image placeholder">
              <h2>{{$team->name}}</h2>
              <p class="text-dark">{{$team->jop}}</p>
            </a>
          </div>
        @endforeach
      
        </div>
      </div>
    </div>
    <!-- END section -->

   


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
        <div class="col-md-8">
            
           
            <div class="accordion unit-8" id="accordion">
            @foreach($all_question as $quey)
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" 
                href="#collapseOne" role="button" aria-expanded="true" 
                aria-controls="collapseOne">{{$quey->question}}<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>{{$quey->answer}}</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            @endforeach
          </div>
          </div>
        </div>
      
      </div>
    </div>

    


    @include('footer.footer')  