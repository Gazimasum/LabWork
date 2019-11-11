@extends('backend.layouts.default')
@section('content')


    <div class="container mt-4">
      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register</div>
      <div class="card-body">


     <form method="post" action="{{route('store')}}" enctype="multipart/form-data" >

      @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control requiredField" name="name" placeholder="Enter name" value="{{ old('name') }}">
      <span class="error" style="color: red">{{$errors->first('name')}}</span>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="text" class="form-control requiredField" name="email" placeholder="Enter Email" value="{{ old('email') }}">
      <span class="error" style="color: red">{{$errors->first('email')}}</span>
    </div>


    <div class="form-group">
    <div class=" container">
      <label for="">Password</label>
      <input type="password"class="form-control requiredField" value="{{old('password')}}" placeholder="Password" name="password" >
      <span class="error" style="color: red">{{$errors->first('password')}}</span>
    </div>
  </div>
  <div class="form-group row">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

      <div class="col-md-6">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
  </div>

  <div class="form-group">
    <div class=" container">
      <div class="col-md-4"></div>
      <label for="validationServer013">Upload Image</label>
        <input type="file" class="form-control" name="user_image[]" required id="image" multiple >
      <span class="error" style="color: red">{{$errors->first('image')}}</span>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="container col-md-4 col-md-offset-4">
    <button class="btn btn-primary " type="submit">Submit form</button>
    </div>
  </div>
</form>

  </div>
  </div>
  </div>
  </div>



@stop
