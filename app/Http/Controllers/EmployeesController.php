<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Validation\Rule;
use URL;
use App\Models\Employee;
class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $employees = Employee::all();
      return Inertia::render('Employees/Index',['employees' =>$employees,'hello' => 'hi' ,'create_emp'=>URL::route('employees.store')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  Request::validate([
            'firstname' => ['required', 'max:50'],
            'lastname' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email', Rule::unique('users')],
            'address' => ['nullable'],
            'position' => ['required'],
            'mobile' => ['nullable'],
            'deptID' => ['nullable'],
            'gender' => ['nullable'],
            'maritalStatus' => ['nullable'],
        ]);
*/        
        //$emp = $request->all();
        //dd($emp);
     $emp  = Employee::create([
         'firstname' =>$request->input('firstname'),
         'lastname' => $request->input('lastname'),
         'address' =>$request->input('address'),
         'email' =>$request->input('email'),
         'position' =>$request->input('position'),
         'mobile' =>$request->input('mobile'),
         'deptID' =>$request->input('deptID'),
         'gender' => $request->input('gender'),
         'maritalStatus' => $request->input('maritalStatus'),
     ]);
     notify()->success('Laravel Notify is awesome!');
     return redirect('/employees')->with('message','Employee Added successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
