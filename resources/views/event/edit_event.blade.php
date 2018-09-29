

@extends('admin.layout')

@section('content')

<div class="container">
    <p>Edit Event</p>
    <hr>
		<div class="row" style="display:inline">

			
				@if(Session::has('success'))
				<p class="alert alert-success">{{ Session::get('success') }}</p>
				@endif

			<form action ="/update_event" method="POST">
				{{ csrf_field() }}
				
				<input type="hidden" name="id" value="{{ $editevent->id }}">
				
				<input type="text" id="event" name="event" value="{{ $editevent->event }}" class="form-control mb-4 col-lg-4" placeholder="Event">
				<input type="text" id="startdate" name="startdate" value="{{ $editevent->startdate }}" class="form-control mb-4 col-lg-4" placeholder="Start">
				<input type="text" id="enddate" name="enddate" value="{{ $editevent->enddate }}" class="form-control mb-4 col-lg-4" placeholder="End">
				<input type="text" id="description" name="description" value="{{ $editevent->description }}" class="form-control mb-4 col-lg-4" placeholder="Description">
				
				<div class="form-group col-lg-12">			
					<button class ="btn btn-success" type="submit">Update Event</button>			
				</div>

				
			</form>	
		</div>
</div>
@endsection






