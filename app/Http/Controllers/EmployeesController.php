<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;
use Auth;
class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user=Auth::user();
      // $employees=Employees::find([1,2,3,4,5]);
      // dd($employees);
        $employees = Employees::all();
        // $employees=Employees::orderby('firstname','created_at')->simplePaginate(2);
        $employees=Employees::orderby('firstname','lastname')->simplePaginate(2);

          // $comapanies=$user->companies;
  return view('application.employees',compact('employees'));
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

      // dd($user);
      $user=Auth::user();
      //
        // dd($user);
    $employees=new Employees;

    $validateddata = $request->validate( [
              'firstname'=>'required',
              'lastname'=>'required',
                      ]);
      $employees->firstname=$request->firstname;
      // $employees->user_id=$user->id;
      $employees->lastname=$request->lastname;
      $employees->company=$request->company;
      $employees->email=$request->email;
      $employees->phone=$request->phone;
      $employees->save();

            return back()->with('success','Your data has been recieved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $employees = Employees::findOrFail($id);

          return view('application.employeesedit',compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employees=employees::find($id);


        $data = $this->validate($request, [
        'firstname'=>'required',
        'lastdate'=>'required',

      ]);


      $employees->firstname=$request->firstname;
      // $employees->user_id=$user->id;
      $employees->lastname=$request->lastname;
      $employees->company=$request->company;
      $employees->email=$request->email;
      $employees->phone=$request->phone;

  $employees->save();
  return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          // dd($employees);
          Employees::destroy($id);
    // dd("fxdf");
    // dd($employees);
   return back()->with('success', 'Employees has been deleted!!');

    }
}
