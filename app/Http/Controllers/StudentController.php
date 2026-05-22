<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        $bala = null;
        return view('students.index')->with('students',$students);
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $resumeName = Null;

        if($request->hasFile('resume')){
            $resumeName = time().'.'.$request->resume->extension();
            $request->resume->move(public_path('resume'),$resumeName);
        }

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'date_of_birth' => $request->date_of_birth,
            'resume' => $resumeName,
            'skills' => $request->skills,
            'gender' => $request->gender,
            'department' => $request->department
        ]);
        return redirect('/student')->with('flash_message','Student Added Successfully');
    }

    public function show($id){
        $students = Student::find($id);
        return view('/students.show')->with('students',$students);
    }

    public function edit($id){
        $students = Student::find($id);
        return view('/students.edit')->with('student',$students);
    }

    public function update(Request $request, $id){
        $students = Student::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('/student')->with('flash_message','Student Updated Successfully');
    }

    public function destroy($id){
        Student::destroy($id);
        return redirect('/student')->with('flash_message','Student Deleted Successfully');
    }
}
