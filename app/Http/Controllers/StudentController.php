<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student(){
        $students = Student::all();
        return view('student.student_manage',['students'=>$students]);
    }

    public function go_create(){
        return view('student.student_new');
    }

    public function create(Request $request)
    {
        $newPost = Student::create([
            'fullname' => $request->txtFullname,
            'birthday' => $request->txtBirthday,
            'address' => $request->txtAddress
        ]);
        
        return redirect('student');
    }

    public function get_student_by_id($id){
        $student = Student::where('id','=',$id)->first();
        return view('student.student_edit',['student'=>$student]);
    }

    public function edit(Request $request, $id){
        $student = Student::where('id','=',$id)->first();
        $student->update([
            'fullname' => $request->txtFullname,
            'birthday' => $request->txtBirthday,
            'address' => $request->txtAddress
        ]);

        return redirect('student');
    }
}
