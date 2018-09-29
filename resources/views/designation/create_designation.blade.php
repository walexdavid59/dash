

@extends('admin.layout')

@section('content')

<div class="container">
    <p>New Designation</p>
    <hr>
		<div class="row" style="display:inline">

				@if(Session::has('success'))
				<p class="alert alert-success">{{ Session::get('success') }}</p>
				@endif

			<form action ="{{ url('create_designation') }}" method="POST">
				{{ csrf_field() }}

				<input type="text" id="designation" name="designation" class="form-control mb-4 col-lg-4" placeholder="Designation">
				<input type="text" id="department" name="department" class="form-control mb-4 col-lg-4" placeholder="Department">
				<input type="text" id="description" name="description" class="form-control mb-4 col-lg-4" placeholder="Description">
				<input type="text" id="username" name="username" class="form-control mb-4 col-lg-4" placeholder="Added By">
				<input type="text" id="addon" name="addon" class="form-control mb-4 col-lg-4" placeholder="Added On">
				<select name="status" class="selectpicker form-control mb-4 col-lg-4">
						<option value="">Status</option>
						<option value="1">Publish</option>
						<option value="0">UnPublish</option>
					  </select>
				<!-- Sign in button -->
				<div class="form-group col-lg-4">			
						<button class ="btn btn-success" type="submit">Save Designation</button>			
					</div>
			</form>	


		</div>
</div>
@endsection