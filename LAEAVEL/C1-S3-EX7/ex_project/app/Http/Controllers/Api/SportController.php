<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\createtResource;
use App\Http\Resources\ShowResource;
use App\Http\Resources\SportResource;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sports = Sport::all();
        if($sports){
            return response()->json(['success' => true, 'data' => SportResource::collection($sports),], 200);
        };
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
        $sport = new Sport();
        if ($sport) {
            return response()->json([
                "success" => true, "data" => true, "message" => "category created successfully"
            ], 200);
        }
        return new createtResource($sport);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $sport = Sport::find($id);
        if ($sport) {
            return response()->json(['success' => true, 'data' => new ShowResource($sport),], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $sport = Sport::find($id);
        if ($sport) {
            $sport->name = $request['name'];
            $sport->description = $request['description'];
            $sport->save();
            return response()->json([
                "success" => true, "data" => true, "message" => "category updated successfully"
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete $id;
        $sport = Sport::find($id);
        if ($sport) {
            $sport->delete();
            return new createtResource($sport);
        } else {
            return response()->json(['success' => true, 'data' => true, 'message' => 'category deleted successfully'], 200);
        }
    }
}
