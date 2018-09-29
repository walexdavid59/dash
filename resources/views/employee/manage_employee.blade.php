
@extends('admin.layout')

@section('content')

<div class="container">
    <p>Manage Employee</p>
    <hr>
        <div class="container row"><a href="{{url('create_employee')}}" class="btn btn-primary">Add Employee</a></div>
        <hr>
<table id="example" class="display" style="width:100%">
        <thead style="background:#444;color:#fff;">
            <tr>
                    <th>Sn</th>
                
                <th>Employee ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Phone</th>
                <th>Added By</th>
                <th>Edit/Delete</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($emps as $emp)
              <tr>
                <td>{{ $loop->iteration }}</td>
                  
                <td>{{ $emp->empid}}</td>
                <td>{{ $emp->surname}}</td>
                <td>{{ $emp->designation}}</td>
                <td>{{ $emp->phone}}</td>
                <td>{{ $emp->created_at}}</td>
                <td> <a href="{{action('DepartmentController@editemployee', $emp['id'])}}" class="btn btn-primary">Edit</a> &nbsp;
                 <a href="" class="btn btn-danger">Delete</a></td>
              
            </tr>
           @endforeach
           
        </tfoot>
    </table>
    <p> &nbsp;</p>
</div>
@endsection


