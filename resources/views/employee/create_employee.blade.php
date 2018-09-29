

@extends('admin.layout')

@section('content')

<div class="container">
    <p>New Employee</p>
    <hr>
		<div class="row" style="display:inline">

			@if(Session::has('success'))
			<p class="alert alert-success">{{ Session::get('success') }}</p>
			@endif

			@if(Session::has('Failure'))
			<p class="alert alert-danger">{{ Session::get('Failure') }}</p>
			@endif

				<form action ="{{ url('create_employee') }}" method="POST">
				{{ csrf_field() }}

				<div class="col-md-12 col-sm-12 col-xs-12" style="border:0px solid;margin:0px;padding:0px;">

					<div class="tab-content">
					
					<div id="personaldata" class="tab-pane active">
					<fieldset style="border:1px solid;">
					   <legend class="scheduler-border" style="color:#00bfff;">Personal Data <em style="font-size:14px;color:#444;font-weight:bold;">New Staff &raquo; </em></legend>
					   
					   
					<table class="table borderless " id="">
					  <tbody>
					
							  <tr>
							  <td>Surname</td>
							  <TD><INPUT class="form-control" type="text" name="surname" id="surname" placeholder="Surname" value=""/></TD>
							  <td>Other Names</td>
							  <TD><INPUT class="form-control" type="text" name="other" id="other" value="" placeholder="Other Names"/></TD>
							  </tr>
							  <tr>
							  <td>Date Of Birth</td>
							  <TD><INPUT class="form-control" type="text" name="dob" id="dob" value="" placeholder="Date Of Birth"/></TD>
							  <td>Sex</td>
							  <TD>
							  <select name="sex" id="sex" class="form-control">
							   <option value="">Sex</option>
							   <option>Male</option>
							   <option>Female</option>
							  </select>
							  </TD>
							  </tr>
							  <tr>
							  <td>State Of Origin</td>
							  <TD>
							  <select name="state" id="state" class="form-control">
							   <option value="">State Of Origin</option>
							   <option>Oyo</option>
							   <option>Ogun</option>
							  </select>
							  </TD>
							  <td>Local Govt.</td>
							  <TD><INPUT class="form-control" type="text" name="locals" id="locals" placeholder="Local Govt." value=""/></TD>
							  </tr>
							  <tr>
							  <td>Marital Status</td>
							  <TD>
							  <select name="marital" id="marital" class="form-control">
							   <option value="">Marital Status</option>
							   <option>Single</option>
							   <option>Married</option>
							   <option>Divorce</option>
							  </select>
							  </TD>
							  <td>Religion</td>
							  <TD>
							  <select name="religion" id="religion" class="form-control">
							   <option value="">Religion</option>
							   <option value="Christian">Christianity</option>
							   <option value="Muslim">Muslim</option>
							   <option>Traditional</option>
							  </select>
							  </TD>
							  </tr>
							  <tr>
							  <td>Phone</td>
							  <TD><INPUT class="form-control" type="text" name="phone" id="phone" value="" placeholder="Phone No"/></TD>
							  <td>Email</td>
							  <TD><INPUT class="form-control" type="text" name="email" id="email"  value="" placeholder="Email"/></TD>
							  </tr>
							  <tr>
							  <td>Address</td>
							  <TD>
							  <textarea class="form-control" name="address" id="address" value="" placeholder="Address"></textarea>
							  </TD>
							  <td>Next Of Kin</td>
							  <TD><INPUT class="form-control" type="text" name="kin" id="kin" value="" placeholder="Name, Phone, Address"/><br/>
							 
							  </TD>
					
							  </tr>
							
							  
							  </tbody>
							  </table> 
							  
					   </fieldset>
						
						</div>


						<!-- Sign in button -->
						<div class="form-group col-lg-12" style="text-align:center;">			
								<button class ="btn btn-success" type="submit">Save Data</button>			
							</div>
					  </div>
					  </div>
				
			</form>	


		</div>
</div>

@endsection