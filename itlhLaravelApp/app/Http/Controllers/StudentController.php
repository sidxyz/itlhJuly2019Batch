<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function show()
    {
    	return view('addStudent');
    }

    public function store(Request $formData)
    {
    	// echo "<br> entered student name =".$formData->name;
    	// echo "<br> entered student email =".$formData->email;
    	// echo "<br> entered student phone =".$formData->phone;
    	// echo "<br> entered student password =".$formData->password;
    	// echo "<br> entered student college =".$formData->college;


        //lamba rasta
    
    	// $student = new Student();
    	
    	// $student->name = $formData->name;
    	// $student->email = $formData->email;
    	// $student->phone = $formData->phone;
    	// $student->password = $formData->password;
    	// $student->college = $formData->college;

    	// $student->save();

        //shortcut    

        Student::create(
            ['name'=>$formData->name,
                         'email'=>$formData->email,
                         'phone'=>$formData->phone,
                         'password'=>$formData->password,
                         'college'=>$formData->college]);

        //chota shortcut

        Student::create($formData->all());


    	echo "<br> student added to Db!";
    }

    public function all()
    {
    	$student = new Student();
    	$allStudents = $student->all();

    	return view('showStudents')->with(['students'=>$allStudents]);

    	//dd($allStudents);
    }

    public function delete($id)
    {
    	// $student = new Student();
    	// $student = $student->where('id',(int)$id)->get();
        
    	// $student = $student->first();
    	// $student->delete();

        Student::destroy((int)$id);

        return redirect('showStudents');

    	//echo "destroyed student with id as $id";
    }

    public function edit($id)
    {
        $student = new Student();
        $student = $student->where('id',(int)$id)->get();
        $student = $student->first();
        //dd($student);
        return view('update')->with('student',$student);
    }

    public function update(Request $formData)
    {
        Student::where('id',(int)$formData->id)
                ->update(['name'=>$formData->name,
                          'email'=>$formData->email,
                          'phone'=>$formData->phone,
                          'password'=>$formData->password,
                          'college'=>$formData->college]);

        return redirect('showStudents');
    }

}
