<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Http\Requests\saveStaffRequest;

class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::get();
        return view('staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('staff.create', [
            'inf'=> new Staff
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(saveStaffRequest $request)
    {
        Staff::create($request -> validated());
        return redirect()->route('staff.index')->with('status', 'Se realizo la creacion de el empleado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inf = Staff::find($id);
        return view('staff.show', compact('inf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        return view('staff.edit', [
            'inf' => Staff::find($id)
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $inf)
    {
        $aux = Staff::find($inf);
        $aux->update([
            'name' => request('nombre'),
            'surname' => request('apellido'),
            'company' => request('empresa'),
            'email' => request('email'),
            'phone' => request('telefono'),
        ]);
        return redirect()->route('staff.show', $aux);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $inf)
    {
        $inf -> delete();
        return redirect()->route('staff.index');
    }
}
