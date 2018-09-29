
@extends('admin.layout')

@section('content')

<div class="container">
    <p>Manage departments</p>
    <hr>
        <div class="container row"><a href="{{url('create_department')}}" class="btn btn-primary">Add Department</a></div>
        <hr>
<table id="example" class="display" style="width:100%">
        <thead style="background:#444;color:#fff;">
            <tr>
                    <th>Sn</th>
                
                <th>Department Name</th>
                <th>Department Code</th>
                <th>Department HOD</th>
                <th>Edit/Delete</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
              <tr>
                <td>{{ $loop->iteration }}</td>
                  
                <td>{{ $user->deptname}}</td>
                <td>{{ $user->deptcode }}</td>
                <td>{{ $user->depthod }}</td>
                <td> <a href="{{ action('DepartmentController@edit', $user['id']) }}" class="btn btn-primary">Edit</a> &nbsp;
                 <a href="" class="btn btn-danger">Delete</a></td>
              
            </tr>
           @endforeach
           
        </tfoot>
    </table>
    <p> &nbsp;</p>
</div>
@endsection




