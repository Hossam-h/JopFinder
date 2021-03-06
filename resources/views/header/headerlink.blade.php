<!DOCTYPE html>
@if(app()->getLocale()=='ar')
<html  lang="{{app()->getLocale()}}" dir="rtl">
@else
<html  lang="{{app()->getLocale()}}" dir="ltr">
  @endif
  <head>
    <title>Job Finder &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('asset/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="https://thrivesearch.com/wp-content/uploads/2018/07/job-search.jpg" type="image/x-icon">  

    <link rel="stylesheet" href="{{asset('asset/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
   
    
    <link rel="stylesheet" href="{{asset('asset/fonts/flaticon/font/flaticon.css')}}">
  
    <link rel="stylesheet" href="{{asset('asset/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    
  </head>
  <body>
  <div class="site-wrap">

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->


<div class="site-navbar-wrap js-site-navbar bg-white">
  
  <div class="container">
    <div class="site-navbar bg-light">
      
        <div class="row align-items-center">
          <div class="col-1">
            <h2 class="mb-0 site-logo"><a href="{{route('index')}}">Job<strong class="font-weight-bold">Finder</strong> </a></h2>
          </div>
          <div class="col-11">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">
                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
               
                
                  
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>      
            </li>      
                @endforeach
               
                <li><a href="{{route('index')}}">{{__('header.Home')}}</a></li>
               

                  <li><a href="{{route('index_about')}}">{{__('header.About')}}</a></li>
                  @auth()
                  
                  <li class="has-children">

                    <a href="#">{{__('header.employee')}}</a>
                    <ul class="dropdown arrow-top">
                     
                    @auth()
                     @if(auth()->user()->name == 'Admin')
                      <li><a href="{{route('dash')}}">{{__('header.Admin_dash')}}</a></li>
                     @endif()
                     @endauth()
                      
                     @auth()
                      @if(auth()->user()->email_type=='Personal')
                      <li><a href="{{route('apply_person')}}">{{__('header.my_applies')}}</a></li>
                      @endif 
                      @endauth()

                      @auth()
                      @if(auth()->user()->email_type=='Company')
                      <li><a href="{{route('jop.showMy_jops')}}">{{__('header.control')}}</a></li>
                      @endif 
                      @endauth()


                      @auth()
                      @if(auth()->user()->email_type=='Company')
                      <li><a href="{{route('apply_comapny')}}">{{__('header.myPost')}}</a></li>
                      @endif 
                      @endauth()
                     
                      

                      @auth()
                      <li><a href="{{route('profile')}}">{{__('header.profile')}}</a></li>
                      <li class=""><a href="{{route('create_profile')}}"> {{__('header.create_profile')}}</a> </li>
                       @endauth()

                    </ul>
                  </li>
                  @endauth()
                  <li>
                    <a href="{{route('connact-us')}}">{{__('header.connact')}}</a></li>
                  
                  @auth()
                  <li class="nav-item">
                    <form action="{{url('logout')}}" method="post">
                      @csrf
                   <input type="submit" value="{{__('header.logout')}}" class="btn btn-primary"> 
                  </form>   
                  </li>                
                  @endauth
                  
                  @guest
                  <li><a href="{{url('login')}}">{{__('header.login')}}</a></li>
                  <li><a href="{{url('register')}}">{{__('header.register')}}</a></li>
                  @endguest
                 
               @auth()
                      @if(auth()->user()->email_type=='Company')
                      <li><a href="{{route('add')}}" class="btn btn-primary">{{__('header.post_jop')}}</a></li>
                      @endif 
                      @endauth()
                     


                  @auth()    
                  <li class="user_header"><a href="{{route('profile')}}">
                    <i class="fas fa-user"></i> <br>
                    <span>{{auth()->user()->name}}</span>
                  </a></li>
                
                  @endauth()

                  
                  
                </ul>
              </div>
            </nav>
          </div>
        </div>
      
    </div>
  </div>
</div>
<div style="height: 113px;"></div>
