

@extends('admin.layout')

@section('content')

<div class="container">
    <p>Edit Department</p>
    <hr>
		<div class="row" style="display:inline">

			
				@if(Session::has('success'))
				<p class="alert alert-success">{{ Session::get('success') }}</p>
				@endif

			<form action ="/update_department" method="POST">
				{{ csrf_field() }}
				
				<input type="hidden" name="id" value="{{ $editid->id }}">
				
				<div class="form-group col-lg-3">
					<label for="deptname">Department Name</label>
					<input type="text" name="deptname" value="{{ $editid->deptname }}" class="form-control">
				</div>

				<div class="form-group col-lg-3">
						<label for="deptcode">Department Code</label>
						<input type="text" name="deptcode" value="{{ $editid->deptcode }}" class="form-control">
					</div>

					<div class="form-group col-lg-3">
							<label for="name">Department HOD</label>
							<input type="text" name="depthod" value="{{ $editid->depthod }}" class="form-control">
						</div>
				
				<div class="form-group col-lg-12">			
					<button class ="btn btn-success" type="submit">Update Department</button>			
				</div>

				
			</form>	
		</div>
</div>
@endsection






