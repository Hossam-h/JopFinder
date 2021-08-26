@include('header.headerlink')

<form action="{{route('question.update',['question'=>$edit->id])}}" method="post" class="p-5 bg-white">
              @csrf
            {{method_field('PUT')}}
              <div class="row form-group">
                <div class="col-md-12"><h3>Edit Question </h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                 <input type="text" name="question" value="{{$edit->question}}" placeholder='add qusetion'>
                </div>
              </div>

              @error('question')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

            
              <div class="row form-group">
                <div class="col-md-12"><h3>Edit Answer</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="answer" value="{{$edit->answer}}" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>

              @error('answer')
            <span class="alert alert-danger">{{$message}}</span>
            @enderror

          

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update about us" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>