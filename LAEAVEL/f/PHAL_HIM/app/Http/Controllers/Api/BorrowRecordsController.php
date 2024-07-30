<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BorrowRecords;
use Illuminate\Http\Request;

class BorrowRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $borrowRecords = BorrowRecords::all();
        return $borrowRecords;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $borrowRecords = BorrowRecords::create($request->all());
        return $borrowRecords;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $borrowRecords = BorrowRecords::find($id);
        return $borrowRecords;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $borrowRecords = BorrowRecords::find($id);
        $borrowRecords->update($request->all());
        return $borrowRecords;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $borrowRecords = BorrowRecords::find($id);
        $borrowRecords->delete();
        return $borrowRecords;
    }
}
