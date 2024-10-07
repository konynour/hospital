<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department =Department::all();
        return view('departments.index',["department"=>$department]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('departments.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                // echo"hi nour mohamed ";
                  dd(vars: $request->input());
                $department = new Department ();
                $department->name =$request->Description ;
                $department->save();
                return redirect()->to("/department");
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $department = Department::find($request->id);
        return view('departments.edit', ["department"=>$department]);
        
        // dd($department);
        // echo"hi my name is nour ";

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
