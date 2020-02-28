<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$students = Student::all();
        $students = Student::orderBy('created_at','desc')->paginate(10);
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Name' => 'required',
            'DOB' => 'required',
            'address' => 'required',
            'contact_No' => 'required'
          ]);

         //add new student
       $student = new Student;
       $student->Name = $request->input('Name');
       $student->DOB = $request->input('DOB');
       $student->address = $request->input('address');
       $student->contact_No = $request->input('contact_No');
       $student->save();

       return redirect('/students')->with('success', 'New Student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $student = Student::find($id);
       return view('students.show')->with('student' , $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student' , $student);
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
        $this->validate($request,[
            'Name' => 'required',
            'DOB' => 'required',
            'address' => 'required',
            'contact_No' => 'required'
          ]);

         //add new student
       $student = Student::find($id);
       $student->Name = $request->input('Name');
       $student->DOB = $request->input('DOB');
       $student->address = $request->input('address');
       $student->contact_No = $request->input('contact_No');
       $student->save();

       return redirect('/students')->with('success', 'Student Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $student = Student::find($id);
       $student->delete();
       return redirect('/students')->with('success', 'Student Removed');
    }
}
