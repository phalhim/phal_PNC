<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Sstudent;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $student = Sstudent::all();
        $student = StudentResource::collection($student);
        return $student;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $student = Sstudent::create($request->all());
        $student = new StudentResource($student);
        return [
            'data' => true,
            'message'=> 'Student Resource was successfully created'
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $student = Sstudent::find($id);
        $student = new StudentResource($student);
        return $student;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $student = Sstudent::find($id);
        $student->update($request->all());
        $student = new StudentResource($student);
        return [
            'data' => true,
           'message'=> 'Student Resource was successfully updated'
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $student = Sstudent::find($id);
        $student->delete();
        return [
            'data' => true,
           'message'=> 'Student Resource was successfully deleted'
        ];
    }
}
