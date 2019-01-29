<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=\App\Student::all();
	return view('index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	$student= new \App\Student;
	$student->name=$request->get('name');
	$student->reg_no=$request->get('reg_no');
	$student->email=$request->get('email');
	$student->school=$request->get('school');
	$student->department=$request->get('department');
	$student->save();
	
	return redirect('students')->with('success', 'Students Information saved');
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
        $student = \App\Student::find($id);
	return view('edit',compact('student', 'id'));
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
	$student= \App\Student::find($id);
	$student->name=$request->get('name');
	$student->reg_no=$request->get('reg_no');
	$student->email=$request->get('email');
	$student->school=$request->get('school');
	$student->department=$request->get('department');
	$student->save();
	return redirect('students');
	
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = \App\Student::find($id);
	$student->delete();
	return redirect('students')->with('success','Entry is now deleted');
    }
}










