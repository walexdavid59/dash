
@extends('admin.layout')

@section('content')
<form method="post" action=""> 
<div class="container">
    <div class="row" style="font-size:25px;"><b>Payroll &nbsp;</b>  Manage Salary</div>
    <hr style="border-top:2px solid #2113ad;">
    <div class="row" style="padding-top:5px;">
    <div class="col-lg-3 text-right">Employee Name</div>
        <div class="col-lg-8">

                <div class="input-group col-lg-9">
                        <select class="custom-select" name="employnames" id="employnames" aria-label="Example select with button addon">
                          <option value="" selected>Choose...</option>
                          @foreach ($emps as $emp)
        <option value='{{ $emp->surname }}'>{{ $emp->surname }}</option>
    @endforeach  
                        </select>
                        <div class="input-group-append">
                                <!--<a href="{{url('create_salary')}}" class="btn btn-primary">Go</a>-->
                                {{--  <a href="{{ action('DepartmentController@showsalary') }}"><button onclick="load_main_content()" type="button" id="btnload" name="btnload"  class="btn btn-primary">load</button></a>  --}}

                                <button type="button" id="btnload" name="btnload"  class="btn btn-primary">load</button>

                                 {{--   <a href="{{ action('DepartmentController@showsalary', $emp['empid']) }}" class="btn btn-primary">Load</a>   --}} 
                        </div>
                      </div>
        </div>
    </div>
        <hr>

        <div class="row" >
                <div class="col-lg-3 text-right">Employee Type</div>
                    <div class="col-lg-8">
            
                            <div class="input-group col-lg-9">
                                    <select class="custom-select" id="employtype" aria-label="Example select with button addon" name="employtype">
                                      <option value="" selected>Choose...</option>
                                      <option value="FT">FT</option>
                                      <option value="PT">PT</option>
                                    </select>
                                  </div>
                    </div>
                </div> <br>

                <div class="row"> 
                        <div class="col-lg-3 text-right" style="padding-top:5px;">Basic Salary</div>
                            <div class="col-lg-8">
                    
                                    <div class="input-group col-lg-9">
                                            <input type="text" value="{{ $emp->surname }}" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="basic">
                                          </div>
                            </div>
                        </div>

    <p> &nbsp;</p>
    <hr>
    @if ($emp->surname != '')

    <div class="container">

<div class="col-md-6">
<div class="col-md-12 float-left" style="background:#fff;border-top:2px solid #27ec1e;">
    <h4>Allowances</h4> <hr>
        <div class="form-group">
                <label for="house_rent_allowance">House Rent Allowance</label>
                <input type="number" name="houserent_rent_allowance" value="{{ $emp->house }}" class="form-control" id="house_rent_allowance" placeholder="Enter house rent allowance..">
                              </div>
              <div class="form-group">
                <label for="medical_allowance">Medical Allowance</label>
                <input type="number" name="medical_allowance" value="{{ $emp->medical }}" class="form-control" id="medicalallowance" placeholder="Enter medical allowance..">
                              </div>
              <div class="form-group">
                <label for="special_allowance">Special Allowance</label>
                <input type="number" name="specialallowance" value="{{ $emp->special }}" class="form-control" id="specialallowance" placeholder="Enter special allowance..">
                              </div>
              <div class="form-group">
                <label for="provident_fund_contribution">Provident Fund Contribution</label>
                <input type="number" name="providentfund" value="{{ $emp->providentallow }}" class="form-control" id="providentfundon" placeholder="Enter special allowance..">
                              </div>
              <div class="form-group">
                <label for="other_allowance">Other Allowance</label>
                <input type="number" name="otherallowance" value="{{ $emp->otherallow }}" class="form-control" id="otherallowance" placeholder="Enter other allowance..">
                              </div>

</div>

</div>
<div class="col-md-6" >
        <div class="col-md-12 float-right" style="background:#fff;border-top:2px solid #ecca1e;">
        <h4>Deductions</h4> <hr>
        <div class="form-group">
                <label for="tax_deduction">Tax Deduction</label>
                <input type="number" name="taxdeduction" value="{{ $emp->tax }}" class="form-control" id="taxdeduction" placeholder="Enter tax deduction..">
                              </div>
              <div class="form-group">
                <label for="providentfunddeduction">Provident Fund Deduction</label>
                <input type="number" name="providentfunddeduction" value="" class="form-control" id="providentfunddeduction" placeholder="Enter tax deduction..">
                              </div>
              <div class="form-group">
                <label for="other_deduction">Other Deduction</label>
                <input type="number" name="otherdeduction" value="{{ $emp->otherdeduct }}" class="form-control" id="otherdeduction" placeholder="Enter other deduction..">
                              </div>
        </div>

        <div class="col-md-12 float-right" style="background:#fff;border-top:2px solid #1eec60;margin-top:10px;">

                <h4>Provident Fund</h4> <hr>
                <div class="form-group">
                        <label for="total_provident_fund">Total Provident Fund</label>
                        <input type="number" class="form-control" value="{{ $emp->total }}" id="totalprovidentfund" name="totalprovidentfund" readonly>
                      </div>

        </div>

        <div class="col-md-12 float-right" style="background:#fff;border-top:2px solid #ec661e;margin-top:10px;">

                <h4>Total Salary Details</h4> <hr>
              
                <div class="box-body ">
                  <div class="form-group">
                    <label for="gross_salary">Gross Salary</label>
                    <input type="number" disabled class="form-control" value="{{ $emp->gross }}" id="grosssalary" name="grosssalary">
                  </div>
                  <div class="form-group">
                    <label for="total_deduction">Total Deduction</label>
                    <input type="number" disabled class="form-control" value="{{ $emp->tax + $emp->otherdeduct}}" id="totaldeduction" name="totaldeduction">
                  </div>
                  <div class="form-group">
                    <label for="net_salary">Net Salary</label>
                    <input type="number" disabled class="form-control" value="{{ $emp->net }}" id="netsalary" name="netsalary">
                  </div>

        </div>
</div>

<div class="box-footer">
        <button type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-edit"></i> Update Details</button>
      </div>

    </div>
    <div>&nbsp;</div>
</div>
@endif
</div>
</form>

<script src="{{ asset('js/jquery-1.11.1.js') }}"></script>

<script type="text/javascript">
    function load_main_content()
    {
        $('#main_content_div').load('/manage_salary/');
    }

jQuery(document).ready(function(){
  jQuery('#btnload').click(function(e){
     e.preventDefault();
     var employnames = $("#employnames").val();
     $.ajax({        
      type: 'post',           
      url: '{{ URL::action ("DepartmentController@showsalary") }}',           
      data: jsonString,       
      success: function(result) {          
         if(result.success) {                
            console.log("Success");           
         }          
      },           
      error: function() {              
         console.log(error);           
         }     
      });
  
     });
  });
</script>

@endsection