@extends('backend.layouts.default')
@section('content')

<div class="container card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Employees Table</div>
	  <div class="card-body">
	    <div class="table-responsive">
		<table class="table table-hover table-bordered" >
		    <thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Salary</th>
					<th>Action</th>
				</tr>
		    </thead>
		    <tbody>
				@foreach($user as $u)
				<tr>
					<th>{{$u->name}}</th>
					<th>{{$u->email}}</th>
					<th>{{$u->salary}}</th>
     				<td><a href="{{route('pdfdownload', $u->id)}}" class="btn btn-success">Download PDF</a></td>
				</tr>
				@endforeach
		    </tbody>
		  
		</table>
		</div>
	</div>
</div>


@stop
