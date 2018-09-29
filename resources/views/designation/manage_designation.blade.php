
@extends('admin.layout')

@section('content')

<div class="container">
    <p>Manage Designation</p>
    <hr>
        <div class="container row"><a href="{{url('create_designation')}}" class="btn btn-primary">Add Designation</a></div>
        <hr>
<table id="example" class="display" style="width:100%">
        <thead style="background:#444;color:#fff;">
            <tr>
                    <th>Sn</th>
                
                <th>Designation</th>
                <th>Department</th>
                <th>Description</th>
                <th>Added By</th>
                <th>Added</th>
                <th>Edit/Delete</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($desigs as $desig)
              <tr>
                <td>{{ $loop->iteration }}</td>
                  
                <td>{{ $desig->designation}}</td>
                <td>{{ $desig->department }}</td>
                <td>{{ $desig->description }}</td>
                <td>{{ $desig->username }}</td>
                <td>{{ $desig->added_on }}</td>
                <td> <a href="{{action('DepartmentController@editdesignation', $desig['id'])}}" class="btn btn-primary">Edit</a> &nbsp;
                 <a href="" class="btn btn-danger">Delete</a></td>
              
            </tr>
           @endforeach
           
        </tfoot>
    </table>
    <p> &nbsp;</p>
</div>
@endsection




