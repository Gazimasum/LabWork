@extends('backend.layouts.default')
@section('content')

  <div class="container">
    <div class="card">
      <div class="card-header">Add Student</div>
      <div class="card-body">

         @if ( Session::has('success') )
              <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
              </button>
              <strong>{{ Session::get('success') }}</strong>
          </div>
          @endif

          @if ( Session::has('error') )
          <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
              </button>
              <strong>{{ Session::get('error') }}</strong>
          </div>
          @endif

          @if (count($errors) > 0)
          <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <div>
                  @foreach ($errors->all() as $error)
                  <p>{{ $error }}</p>
                  @endforeach
              </div>
          </div>
          @endif

        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            Choose your xls/csv File : <input type="file" name="file" class="form-control">
            <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 3%">
        </form>
      </div>
    </div>
<br>
<h3>Uploaded Excel Table</h3>

    <div class="table-responsive">
  <table class="table table-hover table-bordered" >
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
      @foreach ($student as $s)
        <tr>
          <td>{{$s->name}}</td>
          <td>{{$s->email}}</td>
        </tr>
      @endforeach

    </table>
  </div>
<a href="{!! route('export') !!}"><button type="button" name="button" class="btn btn-primary">Export Excel File</button></a>
  </div>


@stop
