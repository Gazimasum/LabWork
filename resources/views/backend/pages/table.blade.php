@extends('backend.layouts.default')
@section('content')

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
				@foreach($employee as $employee)
				<tr>
					<th>{{$employee->name}}</th>
					<th>{{$employee->email}}</th>
					<th>{{$employee->salary}}</th>
					<th>{{$employee->address}}</th>
			        <td><a href="" class="btn btn-success">Edit</a></td>
			        <td>

              <a href="#deleteModal{{ $employee->id }}" data-toggle="modal" class="btn btn-danger">Delete</a></td>

                                      <!-- Modal -->
                    <div class="modal fade" id="deleteModal{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Are you sure to delete!!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="{{ route('delete',$employee->id) }}"  method="post">
                              {{ csrf_field() }}
             <button type="submit" class="btn btn-danger" >Delete</button>


                            </form>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
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


@endsection
