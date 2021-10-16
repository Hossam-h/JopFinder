
    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">{{__('header.About')}}</h3>
            <p>{{__('connact.info_data')}}</p>
            <p><a href="{{route('index_about')}}" class="btn btn-primary px-4 py-2 text-white pill">{{__('connact.more')}}</a></p>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">{{__('footer.menue')}}</h3>
                  <ul class="list-unstyled">
                  <li><a href="{{route('index_about')}}">{{__('header.About')}}</a></li>
                    <li><a href="#Serv">{{__('footer.services')}}</a></li>
                    <li><a href="{{route('showall')}}">{{__('footer.jops')}}</a></li>
                    <li><a href="#testemonial">{{__('footer.testemonial')}}</a></li>
                    <li><a href="#categ">{{__('footer.categ')}}</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">{{__('footer.services')}}</h3>
                  <ul class="list-unstyled">
                    <li><a href="#Serv">{{__('footer.jops')}}</a></li>
                    <li><a href="#Serv">{{__('footer.find')}}</a></li>
                    <li><a href="#Serv">{{__('footer.sug')}}</a></li>
                    <li><a href="#Serv">{{__('footer.internship')}}</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">{{__('home.social_link')}}</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           {{__('footer.copy_write')}}
            
          </script><script>document.write(new Date().getFullYear());</script> 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  

  <script src="{{asset('asset/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery-3.0.0.js')}}"></script>

  
  <script src="{{asset('asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery-ui.js')}}"></script>
  <script src="{{asset('asset/js/popper.min.js')}}"></script>
  <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('asset/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('asset/js/aos.js')}}"></script>

  
  <script src="{{asset('asset/js/mediaelement-and-player.min.js')}}"></script>

  <script src="{{asset('asset/js/main.js')}}"></script>
    
  
  <script>
//     
  </script>
 
  
  
      
  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      // function geolocate() {
      //   if (navigator.geolocation) {
      //     navigator.geolocation.getCurrentPosition(function(position) {
      //       var geolocation = {
      //         lat: position.coords.latitude,
      //         lng: position.coords.longitude
      //       };
      //       var circle = new google.maps.Circle({
      //         center: geolocation,
      //         radius: position.coords.accuracy
      //       });
      //       autocomplete.setBounds(circle.getBounds());
      //     });
      //   }
      // }
    </script>

<script>
       
     $('#city_name').on('keyup',function(){
              let value=$(this).val();
             
                $.ajax({
                    url : "{{url('live_search/action')}}",
                    method : 'get',
                    data:{query:value},
                    dataType:'json',
                    success:function(data){
                      console.log(data.total_data)
                      for(let i=0 ;i<data.total_data; i++){
                        $('tbody').html(data.table_data);                    
                      } 
                        
                     $('#total_records').text(data.total_data);

                    }
                });
            });
            //-----------------------------------------------------------
            $('#jop_name').on('keyup',function(){
              let value=$(this).val();
             
                $.ajax({
                    url : "{{url('/live_search/action_jop')}}",
                    method :'get',
                    data:{query:value},
                    dataType:'json',
                    success:function ( data){
                      console.log(data.total_data)
                      for(let i=0 ;i<data.total_data; i++){
                        $('tbody').html(data.table_data); 
                        
                      }  
                    $('#total_records').text(data.total_data);

                    }
                });
            });

    


 </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  </body>
</html>