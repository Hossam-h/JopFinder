@include('header.headerlink')

<div class="unit-5 overlay" style="background-image: url('../asset/images/hero_2.jpg');">
    <div class="container text-center">
        <h2 class="mb-0">{{$jop_detail->jop_name}}</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Job Item</span></p>
    </div>
</div>




<div class="site-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-12 mb-5">

                <div class="p-5 bg-white">

                    <div class="mb-4 mb-md-5 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <h2 class="mr-3 text-black h4">{{$jop_detail->jop_name}}</h2>

                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            
                            <div><span class="fl-bigmug-line-big104"></span> <span>{{$jop_detail->location}}</span>
                            </div>
                        </div>
                    </div>



                    <div class="img-border mb-5">
                        <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                            <span class="icon-wrap">
                                <span class="icon icon-play"></span>
                            </span>
                            <img src="{{asset('asset/images/hero_2.jpg')}}" alt="Image" class="img-fluid rounded">
                        </a>
                    </div>



                    <p>{{$jop_detail->jop_description}}</p>
                    <p>{{__('jop.jop_descrip')}}</p>

                    <p class="mt-5"><a href="{{route('show_relation',['id'=>$jop_detail->id])}}"
                            class="btn btn-primary  py-2 px-4">{{__('home.apply_jop')}}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer.footer')