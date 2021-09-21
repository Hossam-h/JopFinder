
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
              