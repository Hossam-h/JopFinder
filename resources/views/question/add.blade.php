@include('header.headerlink')

<form action="{{route('question.store')}}" method="post" class="p-5 bg-white">
    @csrf

    <div class="row form-group">
        <div class="col-md-12">
            <h3>Add Question </h3>
        </div>
        <div class="col-md-12 mb-3 mb-md-0">
            <input type="text" name="question" class="form-control" placeholder='add qusetion'>
        </div>
    </div>

    @error('question')
    <span class="alert alert-danger">{{$message}}</span>
    @enderror

    <!--in ar-->
    <div class="row form-group">
        <div class="col-md-12">
            <h3>Add Question_Ar </h3>
        </div>
        <div class="col-md-12 mb-3 mb-md-0">
            <input type="text" name="question_ar" class="form-control" placeholder='add qusetion'>
        </div>
    </div>

    @error('question')
    <span class="alert alert-danger">{{$message}}</span>
    @enderror


    <div class="row form-group">
        <div class="col-md-12">
            <h3>Add Answer</h3>
        </div>
        <div class="col-md-12 mb-3 mb-md-0">
            <textarea name="answer" value="" class="form-control" id="" cols="30" rows="5"></textarea>
        </div>
    </div>

    @error('answer')
    <span class="alert alert-danger">{{$message}}</span>
    @enderror

    <!--in ar-->
    <div class="row form-group">
        <div class="col-md-12">
            <h3>Add Answer_Ar</h3>
        </div>
        <div class="col-md-12 mb-3 mb-md-0">
            <textarea name="answer_ar" value="" class="form-control" id="" cols="30" rows="5"></textarea>
        </div>
    </div>

    @error('answer')
    <span class="alert alert-danger">{{$message}}</span>
    @enderror



    <div class="row form-group">
        <div class="col-md-12">
            <input type="submit" value="{{__('admin.create_Question')}}" class="btn btn-primary  py-2 px-5">
        </div>
    </div>


</form>