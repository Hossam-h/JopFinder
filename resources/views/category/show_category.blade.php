
@include('header.headerlink')

@foreach($show_jops as $jop)

              <a href="{{route('jop_detail',['id'=>$jop->id])}}" style="margin-top:10px;"class="job-item d-block d-md-flex align-items-center fulltime">
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
                    <span class="text-info p-2 rounded border border-info">Details</span>
                  </div>
                </div>  
              </a>
                  
              @endforeach


<form action="{{route('destroy_category',['id'=>$id_cat])}}" method="post" style="margin:20px; cursore:pointer;">
@csrf
<input type="submit" value="Delete Category" class="nav-link" style="background-color:#50504d; color:white; cursor:pointer;">
</form>
<form action="{{route('edit_category',['id'=>$id_cat])}}" method="get" style="margin:20px; cursore:pointer;">

<input type="submit" value="update Category" class="nav-link" style="background-color:#50504d; color:white; cursor:pointer;">
</form>
