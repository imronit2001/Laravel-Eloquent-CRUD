<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('welcome', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->city = $request->city;
        $student->marks = $request->marks;

        // Single File Upload in public
        if ($request->hasFile('filename')) {
            $filename = "IMG-".time().".".$request->file('filename')->getClientOriginalExtension();
            $file = 'Images/'.$request->file('filename');
            $file->move('Images/', $filename);
            $student->filename = $filename ;

        }

        
        // Single File Upload in storage/app/public
        // if ($request->hasFile('filename')) {
        //     $filename = "IMG-".time().".".$request->file('filename')->getClientOriginalExtension();
        //     $student->filename = $filename ;
        //     $request->file('filename')->storeAs('public/uploads',$filename);
        // }
        // else{
        //     $student->filename = "" ;
        // }

        $student->save();
        return redirect((route('index')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $student = Student::find($id);
        return view('edit', ['student' => $student]);
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
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->city = $request->city;
        $student->marks = $request->marks;
        if ($request->hasFile('filename')) {
            $filename = "IMG-" . time() . "." . $request->file('filename')->getClientOriginalExtension();
            $student->filename = $filename;
            $request->file('filename')->storeAs('public/uploads', $filename);
        }
        $student->save();
        return redirect((route('index')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect((route('index')));
    }
}
