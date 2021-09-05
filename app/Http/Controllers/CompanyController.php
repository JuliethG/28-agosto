<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10);
        Return view ('companies.index',compact('companies'));
    }

    public function create()
    {
        return view ('companies.create');
    }

    public function show($id)
    {
        $companies = Company::find($id);
        return view('companies.show',compact('companies'));
    }

    public function store(Request $request)
    {
        $companies = Company::create([
            'name'=>$request->input('name'),
            'nit'=>$request->input('nit')
        ]);
        return redirect('companies')->with('status', 'Compañia '.$request->input('name').' creada');
    }
    public function edit($id)
    {
        $companies = Company::find($id);
        return view('companies.edit',compact('companies'));
    }

    public function update(Request $request, $id)
    {
        $companies = Company::find($id)->update([
            'name'=>$request->input('name'),
            'nit'=>$request->input('nit'),
        ]);
        Return redirect('companies')->with('status','Se ha actualizado correctamente '.$request->input('name'));

    }
}
