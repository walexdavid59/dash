<?php

namespace App\Http\Controllers;


//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
//use Request;
use \App\User;
use \App\Department;
use \App\Designation;
use \App\Event;
use \App\Personal;
use \App\Salary;
use Session;
use DB;
use Auth;
use Carbon\Carbon;
use Response;
//use Input;

class DepartmentController extends Controller
{
    //
    
    public function __construct()
    {
        return $this->middleware(['auth']);
    }
    public function index()
    {
         $users = Department::all();

        //  dd($users );
         return view('department.manage_department',compact('users'));
    }

    public function show()
    {

         return view('department.create_department');
    }

    public function edit($id)
    {
        // dd(auth()->user());
        $editid = Department::find($id);
        return view('department.edit_department',compact('editid','id'));
    }

    public function store(Request $request)
    {
        {
            $this->validate(request(), [
                'deptcode' => 'required',
                'deptname' => 'required',
                'depthod' => 'required'
            ]);
            
            $dept = Department::create(request(['deptcode', 'deptname', 'depthod']));
            //dd($dept );
            
            //auth()->login($dept);
            Session::flash('success', 'Department created successfully.');
            return redirect()->to('create_department');
            
        }
    }

    public function update(Request $request)
    {
         $department = Department::find($request->id);
        
         request()->validate([

            'deptcode' => 'required',
            'deptname' => 'required',
            'depthod' => 'required',
        ]);
        $department->deptcode = $request->deptcode;
        $department->deptname = $request->deptname;
        $department->depthod = $request->depthod;
        $department->save();
        
        // $department->update($request->all());
        return redirect()->action('DepartmentController@show')
                        ->with('success','Product updated successfully');
    }

    public function designation()
    {
         $desigs = Designation::all();

          //dd($desigs );
         return view('designation.manage_designation',compact('desigs'));
    }
    public function showdesignation()
    {

         return view('designation.create_designation');
    }
    public function storedesignation(Request $request)
    {
        {
            $this->validate(request(), [
                'designation' => 'required',
                'department' => 'required',
                'description' => 'required',
                'username' => 'required',

            ]);
            $designate = Designation::create([
                'designation' => request('designation'),
                'department' => request('department'),
                'description' => request('description'),
                'username' => request('username'),
                'added_on' => request('addon'),
            ]);
            //dd($designate);
            
            //auth()->login($dept);
            Session::flash('success', 'Designation created successfully.');
            return redirect()->to('create_designation');
            
        }
    }

    public function editdesignation($id)
    {
        // dd(auth()->user());
        $editdesig = Designation::find($id);
        return view('designation.edit_designation',compact('editdesig','id'));
    }

    public function updatedesig(Request $request)
    {
         $designation = Designation::find($request->id);
        
         request()->validate([

            'designation' => 'required',
            'department' => 'required',
            'description' => 'required',
            'username' => 'required',
            'addon' => 'required',
        ]);
        $designation->designation = $request->designation;
        $designation->department = $request->department;
        $designation->description = $request->description;
        $designation->username = $request->username;
        $designation->added_on = $request->addon;

        $designation->save();
        
        // $department->update($request->all());
        return redirect()->action('DepartmentController@showdesignation')
                        ->with('success','Product updated successfully');
    }

    public function event()
    {
         $events = Event::orderBy('id', 'DESC')->get();

          //dd($events );
         return view('event.manage_event',compact('events'));
    }

    public function showevent()
    {

         return view('event.create_event');
    }

    public function storeevent(Request $request)
    {
        {
            $this->validate(request(), [
                'event' => 'required',
                'startdate' => 'required',
                'enddate' => 'required',
                'description' => 'required',
                //'added_by' => 'required',
                //'added_on' => 'required',

            ]);
            $today = Carbon::today();
            $event = Event::create([
                'event' => request('event'),
                'startdate' => request('startdate'),
                'enddate' => request('enddate'),
                'description' => request('description'),
                //'added_by' => request('addedby') ,
                'added_by' => auth()->user()->username ,
                'added_on' =>  $today,
                
            ]);
            //dd($event);
            
            //auth()->login($dept);
            Session::flash('success', 'Event created successfully.');
            return redirect()->to('create_event');
            
        }
    }

    public function editevent($id)
    {
        // dd(auth()->user());
        $editevent = Event::find($id);
        return view('event.edit_event',compact('editevent','id'));
    }

    public function updateevent(Request $request)
    {
         $event = Event::find($request->id);
        
         request()->validate([

            'event' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'description' => 'required',
        ]);
        $event->event = $request->event;
        $event->startdate = $request->startdate;
        $event->enddate = $request->enddate;
        $event->description = $request->description;

        $event->save();
        
        // $department->update($request->all());
        return redirect()->action('DepartmentController@showevent')
                        ->with('success','Event updated successfully');
    }

    public function employee()
    {
         $emps = Personal::all();

        //  dd($users );
         return view('employee.manage_employee',compact('emps'));
    }

    public function showemployee()
    {
         return view('employee.create_employee');
    }

    public function storeemployee(Request $request)
    {
        $this->validate(request(), [
            'surname' => 'required',
            'other' => 'required',
            'dob' => 'required',
            'sex' => 'required',
            'state' => 'required',
            'locals' => 'required',

        ]);

        $length = 4;
    $id = '';
    for ($i=0;$i<$length;$i++){
        $id .= rand(1, 9);

    }
    $newEmpID = $id;


            $person = Personal::create([
                $todays = Carbon::today(),
                $mytime = Carbon::now(),
                $mytime->toDateTimeString(),
                'date' => $todays,
                'time' => $mytime,
                'empid' => 'sub'.$newEmpID,
                'surname' => request('surname'),
                'othername' => request('other'),
                'dob' => request('dob'),
                'sex' => request('sex'),
                'state' => request('state'),
                'localgovt' => request('locals'),
                'marital' => request('marital'),
                'religion' => request('religion'),
                'phone' => request('phone'),
                'email' => request('email'),
                'address' => request('address'),
                'kin' => request('kin'),
                //'created_at' => $todays,
                //'updated_at' => $todays,
                
                
            ]);



            $salary = Salary::create([
                'empid' => 'sub'.$newEmpID,
                'emptype' => 'FT',
                'house' => '00.00',
                'medical' => '00.00',
                'special' => '00.00',
                'providentallow' => '00.00',
                'otherallow' => '00.00',
                'tax' => '00.00',
                'providentdeduct' => '00.00',
                'otherdeduct' => '00.00',
                'gross' => '00.00',
                'net' => '00.00',
                'total' => '00.00',
            ]);
           

            if ( !$person)
            {
                Session::flash('Failure', 'Employee not created.');
            return redirect()->to('create_employee');
                }
            Session::flash('success', 'Employee created successfully.');
            return redirect()->to('create_employee');
    }

   


    public function showsalary(Request $request)
    {
        //$emps2 = Personal::all();
        //$id = Input::get("id");
        //$userID = Input::get('employnames');
        //return Response::json($userID);
        $employ = Input::get('employnames');
        $emps = DB::table('personaldatas')
            ->join('salarys', 'personaldatas.empid', '=', 'salarys.empid')
            ->select('personaldatas.*', 'salarys.house', 'salarys.medical', 'salarys.special', 'salarys.providentallow','salarys.otherallow', 'salarys.tax', 'salarys.providentdeduct', 'salarys.otherdeduct', 'salarys.total', 'salarys.gross', 'salarys.net')
            //->where('personaldatas.surname', '$usemploy')
            ->get();
            dd($employ);
         return view('payroll.manage_salary',compact('emps'));
    }

    public function displaysalary() {
        /*$sala = Personal::find($id);
        return View::make('manage_salary',
                           array('title'=>'Salarys',
                          'personal'=>Personal::all(),
                          'salary'=>Personal::with('Salary')->where('surname',$request->employname)->get()                 
                         ),compact('sala','id')
        );*/
}


    /* $item_id = Input::get('item_id');
$user_id = Input::get('user_id');

foreach($item_id as $key => $n ) 
{
$item = Item::find( $item_id[$key] );

    $arrData[] = array( 
        "order_id"		=> Input::get('order_id'),
        "user_id"		=> $user_id[$key], 
        "item_id"		=> $item_id[$key], 
        "item_price"	=> $item->price, 
        "item_currency"	=> $item->currency,
        "quantity"		=> 1						
    );

}	
Model::create( $arrData ); */
}
