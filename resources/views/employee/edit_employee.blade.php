

@extends('admin.layout')

@section('content')

<div class="container">
    <p>Edit Employee</p>
    <hr>
		<div class="row" style="display:inline">

				@if(Session::has('success'))
				<p class="alert alert-success">{{ Session::get('success') }}</p>
				@endif

			<form action ="{{ url('/update_employee') }}" method="POST">
				{{ csrf_field() }}

				<div class="col-md-12 col-sm-12 col-xs-12" style="border:0px solid;margin:0px;padding:0px;">
						<input type="hidden" name="id" value="{{ $editemp->id }}">
					<ul class="nav nav-pills" style="padding:0px;margin:0px;font-size:18px;">
					  <li class="active"><a data-toggle="tab" class="" href="#personaldata">Personal Data </a></li> &nbsp;
					  <li><a data-toggle="tab" href="#academicdata">Academic Data </a></li>&nbsp;
					  <li><a data-toggle="tab" href="#experience" id=""> Work Experience</a></li>
					  </ul>
					<div class="tab-content">
					
					<div id="personaldata" class="tab-pane active">
					<fieldset style="border:1px solid;">
					   <legend class="scheduler-border" style="color:#00bfff;">Personal Data <em style="font-size:14px;color:#444;font-weight:bold;">New Staff &raquo; </em></legend>
					   
					   
					<table class="table borderless " id="">
					  <tbody>
					
							  <tr>
							  <td>Surname</td>
							  <TD><INPUT class="form-control" type="text" name="surname" id="surname" placeholder="Surname" value="{{ $editemp->surname }}"/></TD>
							  <td>Other Names</td>
							  <TD><INPUT class="form-control" type="text" name="other" id="other" value="{{ $editemp->othername }}" placeholder="Other Names"/></TD>
							  </tr>
							  <tr>
							  <td>Date Of Birth</td>
							  <TD><INPUT class="form-control" type="text" name="dob" id="dob" value="{{ $editemp->dob }}" placeholder="Date Of Birth"/></TD>
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
							  <TD><INPUT class="form-control" type="text" name="locals" id="locals" placeholder="Local Govt." value="{{ $editemp->localgovt }}"/></TD>
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
							  <TD><INPUT class="form-control" type="text" name="phone" id="phone" value="{{ $editemp->phone }}" placeholder="Phone No"/></TD>
							  <td>Email</td>
							  <TD><INPUT class="form-control" type="text" name="email" id="email"  value="{{ $editemp->email }}" placeholder="Email"/></TD>
							  </tr>
							  <tr>
							  <td>Address</td>
							  <TD>
							  <textarea class="form-control" name="address" id="address" value="{{ $editemp->address }}" placeholder="Address"></textarea>
							  </TD>
							  <td>Next Of Kin</td>
							  <TD><INPUT class="form-control" type="text" name="kin" id="kin" value="{{ $editemp->kin }}" placeholder="Name, Phone, Address"/><br/>
							 
							  </TD>
					
							  </tr>
							  
							  <tr>
							   <td colspan="4" align="center">
							   <a class="btn btn-primary btnNext" style="width:80px;">Next</a>
								 <!--<button type="button" class="btn btn-success" id="SubmitData" name="SubmitData">Submit</button>-->
							   </td>
							  </tr>
							  
							  </tbody>
							  </table> 
							  
					   </fieldset>
						
						</div>
						
						
						<div id="academicdata" class="tab-pane">
					<fieldset style="border:1px solid;">
					   <legend class="scheduler-border" style="color:#00bfff;">Academic Data <em style="font-size:14px;color:#444;font-weight:bold;">New Staff &raquo; </em></legend>
					  
					   
						<table class="table borderless " id="AddAca">
					  <tbody>
							  <tr>
							  <td style="width:25px;"><input type="checkbox" name="chk[]" style="width:25px;"/> </td>
							  <TD style="width:40%"><INPUT class="form-control" type="text" name="school[]" id="school" placeholder="Name Of School"/></TD>
							  <TD>
							  <select name="qualification[]" id="qualification" class="form-control">
							   <option value="">Qualification</option>
								
							  </select>
							  </TD>
							  <TD>
							  <select name="grade[]" id="grade" class="form-control">
							   <option value="">Grade</option>
								
							  </select>
							  </TD>
							  <TD><INPUT class="form-control" type="text" name="start[]" id="start" value="" placeholder="Start Date"/></TD>
							  <TD><INPUT class="form-control" type="text" name="end[]" id="end" value="" placeholder="End Date"/></TD>
							  </tr>
							  </tbody>
							  </table>  
					  
					 <div style="text-align:center;border:0px solid;">
							<INPUT type="button" class="btn btn-info" value="Add Row" onclick="addRow('AddAca')" />
						<INPUT class="btn btn-danger" type="button" value="Delete Row" onclick="deleteRow('AddAca')" />
						<!--<INPUT type="button" class="btn btn-success" name="SubmitAcad" id="SubmitAcad" value="Submit"/>-->
					</div><br>
					<div style="text-align:center;border:0px solid;">
					 <a class="btn btn-primary btnPrevious" style="width:80px;">Previous</a>
					 <a class="btn btn-primary btnNext" style="width:80px;">Next</a>
					 </div>
					
					   
					</fieldset>
						</div>
						
						<div id="experience" class="tab-pane">
						
						<fieldset style="border:1px solid;">
					   <legend class="scheduler-border" style="color:#00bfff;">Experience <em style="font-size:14px;color:#444;font-weight:bold;">Work Experience &raquo; </em></legend>
					
					   <table class="table borderless " id="AddExp">
					  <tbody>
							  <tr>
							  <td style="width:25px;"><input type="checkbox" name="chk[]" style="width:25px;"/> </td>
							  <TD style="width:25%"><INPUT class="form-control" type="text" name="organise[]" id="organise" value="" placeholder="Organization"/></TD>
							  <TD>
							   <select name="designation[]" id="designation" class="form-control">
							   <option value="">Designation</option>
								
							  </select>
							  </TD>
							  <TD style="width:25%"><INPUT class="form-control" type="text" name="description[]" id="description" placeholder="Description"/></TD>
							  <TD><INPUT class="form-control" type="text" name="startex[]" id="startex" value=""  placeholder="Start Date"/></TD>
							  <TD><INPUT class="form-control" type="text" name="endex[]" id="endex" value=""  placeholder="End Date"/></TD>
							  </tr>
							  </tbody>
							  </table>  
					  
					 <div style="text-align:center;border:0px solid;">
							<INPUT type="button" class="btn btn-info" value="Add Row" onclick="addRow('AddExp')" />
						<INPUT class="btn btn-danger" type="button" value="Delete Row" onclick="deleteRow('AddExp')" />
						
						<!--<INPUT type="button" class="btn btn-success" name="SubmitExp" id="SubmitExp" value="Submit"/>-->
					</div><br>
					
					<div style="text-align:center;border:0px solid;">
					 <a class="btn btn-primary btnPrevious" style="width:80px;">Previous</a>
					 <a class="btn btn-primary btnNext" style="width:80px;">Next</a>
					 </div>
					
					
					   
					</fieldset> 
					
					
						</div>

						<!-- Sign in button -->
						<div class="form-group col-lg-12" style="text-align:center;">			
								<button class ="btn btn-success" type="submit">Update Data</button>			
							</div>
					  </div>
					  </div>
				
			</form>	

		</div>
</div>
<script>
		$('.btnNext').click(function(){

			$('.nav-tabs > .active').next('li').find('a').trigger('click');
		  });
		  
			$('.btnPrevious').click(function(){
			$('.nav-tabs > .active').prev('li').find('a').trigger('click');
		  });

		  
function addRow(tableID) {

	var table = document.getElementById(tableID);

	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);

	var colCount = table.rows[0].cells.length;

	for(var i=0; i<colCount; i++) {

		var newcell	= row.insertCell(i);

		newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		//alert(newcell.childNodes);
		switch(newcell.childNodes[0].type) {
			case "text":
					newcell.childNodes[0].value = "";
					break;
			case "checkbox":
					newcell.childNodes[0].checked = false;
					break;
			case "select-one":
					newcell.childNodes[0].selectedIndex = 0;
					break;
		}
	}
}

function deleteRow(tableID) {
	try {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;

	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {
				alert("Cannot delete all the rows.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}


	}
	}catch(e) {
		alert(e);
	}
}
</script>
@endsection