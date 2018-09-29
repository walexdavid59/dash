

@extends('admin.layout')

@section('content')

<div class="container">
    <p>Edit Designation</p>
    <hr>
		<div class="row" style="display:inline">

			
				@if(Session::has('success'))
				<p class="alert alert-success">{{ Session::get('success') }}</p>
				@endif

			<form action ="/update_designation" method="POST">
				{{ csrf_field() }}
				
				<input type="hidden" name="id" value="{{ $editdesig->id }}">
				
				<div class="form-group col-lg-3">
					<label for="deptname">Designation</label>
					<input type="text" name="designation" value="{{ $editdesig->designation }}" class="form-control">
				</div>

				<div class="form-group col-lg-3">
					<label for="deptname">Department</label>
					<input type="text" name="department" value="{{ $editdesig->department }}" class="form-control">
				</div>

				<div class="form-group col-lg-3">
					<label for="deptname">Description</label>
					<input type="text" name="description" value="{{ $editdesig->description }}" class="form-control">
				</div>

				<div class="form-group col-lg-3">
					<label for="deptname">Added By</label>
					<input type="text" name="username" value="{{ $editdesig->username }}" class="form-control">
				</div>

				<div class="form-group col-lg-3">
					<label for="deptname">Added On</label>
					<input type="text" name="addon" value="{{ $editdesig->added_on }}" class="form-control">
				</div>
				
				<div class="form-group col-lg-12">			
					<button class ="btn btn-success" type="submit">Update Designation</button>			
				</div>

				
			</form>	
		</div>
</div>
@endsection






