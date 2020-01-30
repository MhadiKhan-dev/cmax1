<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $user=Auth::user();
          $company = company::all();   
return view('application.companies',compact('companies'));
    }

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
        $company=new company();
        $data = $this->validate($request, [
            'name'=>'required',
        ]);
        $company->name=$request->name;
        $company->email=$request->email;
        $company->logo=$request->logo;
        $company->website=$request->website;
        $company->save();
        return back()->with('success','Your data has been recieved');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
         return view('application.bugreportedit',compact('bugreport'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $user=Auth::user();
    $bugreport=Bugreport::find($id);
    $validateddata = $request->validate([
              'name'=>'required',
                      ]);
        $company->name=$request->name;
        $company->email=$request->email;
        $company->logo=$request->logo;
        $company->website=$request->website;
    $bugreport->save();
      return redirect()->route('bugreports.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
$company->delete();
   return back()->with('success', 'bugreports has been deleted!!');    }
}
