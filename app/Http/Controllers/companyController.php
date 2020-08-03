<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Company;
use App\Http\Requests\saveCompoanyRequest;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companys = Company::get();
        return view('company.index', compact('companys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('company.create', [
            'inf'=> new Company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(saveCompoanyRequest $request)
    {
    
        
        Company::create($request -> validated());
        return redirect()->route('company.index')->with('status', 'Se realizo la creacion de la empresa con exito');
       /**pany::create([
            'name' => request('name'),
            'email' => request('email'),
            'url' => request('url')
        ]);

        **/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $inf = Company::find($id);
        return view('company.show', [
            'inf' => Company::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inf = Company::find($id);
        return view('company.edit', [
            'inf' => Company::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($inf)
    {
        
     $aux = Company::find($inf);
        $aux->update([
            'name' => request('name'),
            'email' => request('email'),
            'url' => request('url'),
        ]);
        return redirect()->route('company.show', $aux);
              
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $inf)
    {
        $inf -> delete();
        return redirect()->route('company.index');
    }
}
