
@extends('admin.layout')

@section('content')

<div class="container">
    <p>Manage Event</p>
    <hr>
        <div class="container row"><a href="{{url('create_event')}}" class="btn btn-primary">Add Event</a></div>
        <hr>
<table id="example" class="display" style="width:100%">
        <thead style="background:#444;color:#fff;">
            <tr>
                    <th>Sn</th>
                
                <th>Event Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Description</th>
                <th>Added By</th>
                <th>Added On</th>
                <th>Edit/Delete</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
              <tr>
                <td>{{ $loop->iteration }}</td>
                  
                <td>{{ $event->event}}</td>
                <td>{{ $event->startdate}}</td>
                <td>{{ $event->enddate}}</td>
                <td>{{ $event->description}}</td>
                <td>{{ $event->added_by}}</td>
                <td>{{ $event->added_on}}</td>
                <td> <a href="{{ action('DepartmentController@editevent', $event['id']) }}" class="btn btn-primary">Edit</a> &nbsp;
                 <a href="" class="btn btn-danger">Delete</a></td>
              
            </tr>
           @endforeach
           
        </tfoot>
    </table>
    <p> &nbsp;</p>
</div>
@endsection




