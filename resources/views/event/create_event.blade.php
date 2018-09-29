

@extends('admin.layout')

@section('content')

<div class="container">
    <p>New Event</p>
    <hr>
		<div class="row" style="display:inline">

				@if(Session::has('success'))
				<p class="alert alert-success">{{ Session::get('success') }}</p>
				@endif

			<form action ="{{ url('create_event') }}" method="POST">
				{{ csrf_field() }}

				<input type="text" id="event" name="event" class="form-control mb-4 col-lg-4" placeholder="Event">
				<input type="text" id="startdate" name="startdate" class="form-control mb-4 col-lg-4" placeholder="Start">
				<input type="text" id="enddate" name="enddate" class="form-control mb-4 col-lg-4" placeholder="End">
				<input type="text" id="description" name="description" class="form-control mb-4 col-lg-4" placeholder="Description">
				<input type="text" id="addedby" name="addedby" class="form-control mb-4 col-lg-4" placeholder="Added By">
				<!-- Sign in button -->
				<div class="form-group col-lg-4">			
						<button class ="btn btn-success" type="submit">Save Event</button>			
					</div>
			</form>	


		</div>
</div>
@endsection