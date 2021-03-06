@include('header.headerlink')

    <div class="unit-5 overlay" style="background-image: url('../asset/images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">{{__('jop.post_job')}}</h2>
        
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            <form action="{{route('store_jop')}}" method="post" class="p-5 bg-white">
              @csrf
              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Job Title</label>
                  <input type="text" name="jop_name" id="fullname" class="form-control" placeholder="eg. Full Stack Frontend">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">موضوع الوظيفه</label>
                  <input type="text" name="jop_name_ar" id="fullname" class="form-control" placeholder="eg. Full Stack Frontend">
                </div>
              </div>
           
            @error('jop_name')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror
           
            <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Select your company name</label>
                   
                 <select name="company_name" id="" class="form-control">
                @foreach($companies_name as $name)
                <option value="{{$name->name}}">{{$name->name}}</option>
                @endforeach
                </select>
                </div>
              </div>

              @error('company_name')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Salary</label>
                  <input type="text" id="fullname" name="salary" class="form-control" placeholder="Ex: $5000-$6000">
                </div>
              </div>
  
              @error('salary')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="location" class="form-control" placeholder="New York City">
                </div>
              </div>
              @error('location')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror


            <div class="row form-group mb-4">
                <div class="col-md-12"><h3>الموقع</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" name="location_ar" class="form-control" placeholder="">
                </div>
              </div>
              @error('location')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror



            <!--status -->
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" name='categore_id' id="exampleFormControlSelect1">
    @foreach( $categories as $category)
      <option value="{{$category->id}}">{{$category->category}}</option>
      @endforeach
    </select>
  </div>
  <!-- @error('status')
<div> <span class="alert alert-danger"> {{$message}} </span></div> 
@enderror -->

              <div class="row form-group">
                <div class="col-md-12"><h3>Job Description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="jop_description" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>
              @error('jop_description')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror



            <div class="row form-group">
                <div class="col-md-12"><h3>وصف الوظيفه</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="jop_description_ar" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>
              @error('jop_description')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

            
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Post a Job" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>
          </div>

        </div>
      </div>
    </div>

   


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
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How much pay for 3  months?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>
      
      </div>
    </div>

    

@include('footer.footer')
    