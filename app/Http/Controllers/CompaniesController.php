<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;
use Auth;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $user=Auth::user();
    $companies = Companies::all();

     $companies=Companies::orderby('name','desc')->simplePaginate(2);

     return view('application.companies',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::user();
        $companies=new Companies();
        $data = $this->validate($request, [
            'name'=>'required',
        ]);
        // dd($request->file('sdasd'));

        $companies->name=$request->name;
        $companies->email=$request->email;

        $companies->logo=$request->file('logo')->getClientOriginalName();
              // $companies=$request->file('logo');
        $companies->website=$request->website;
        $companies->save();
        return back()->with('success','Your data has been recieved');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $companies = Companies::findOrFail($id);
        // dd($compnay);
        return view('application.companiesedit',compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // dd("fafafa");
      $user=Auth::user();
      $companies=companies::find($id);
      $data = $this->validate($request, [
      'name'=>'required',

  ]);
      $companies->name=$request->name;
      $companies->email=$request->email;
      $companies->logo=$request->logo;
      $companies->website=$request->website;

        $companies->save();

  return redirect()->route('companies.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Companies::destroy($id);
      return back()->with('success', 'companiess has been deleted!!');

    }
}
