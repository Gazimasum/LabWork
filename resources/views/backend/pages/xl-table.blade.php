@extends('backend.layouts.default')
@section('abc')

<div class=" container card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Employees Table</div>
	  <div class="card-body">
	    <div class="table-responsive">
		<table class="table table-hover  table-bordered" id="dataTable">
		    <thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Salary</th>
					<th>Address</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
		    </thead>
		    <tbody>
				@foreach($employee as $emp)
				<tr>
					<th>{{$emp->name}}</th>
					<th>{{$emp->email}}</th>
					<th>{{$emp->salary}}</th>
					<th>{{$emp->address}}</th>
			        <td><a href="" class="btn btn-success">Edit</a></td>
					<td><a href="{{action('XlController@export')}}">Export</a></td>
				</tr>
				@endforeach
		    </tbody>
		    <tfoot>
		    	<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Salary</th>
					<th>Address</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
		    </tfoot>
		</table>
		</div>
	</div>
</div>


@stop









