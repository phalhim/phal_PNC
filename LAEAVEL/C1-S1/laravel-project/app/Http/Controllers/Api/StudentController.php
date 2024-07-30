<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //connect to the api
        $students = Student::list();
        return response()->json(['success' => true, 'date' => $students], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->name);
        $Student = Student::store($request);
        return response()->json(['success' => true, 'date' => true, 'massage' => "student was created"], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student = Student::find($id);
        return response()->json(['success' => true, 'date' => $student], 200);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::store($request,$id);
        return response()->json(['success' => true, 'date' => true, 'massage' => "student was update successfully"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return response()->json(['success' => true, 'date' => true, 'massage' => "Student was successfully deleted"], 200);
    }
}
