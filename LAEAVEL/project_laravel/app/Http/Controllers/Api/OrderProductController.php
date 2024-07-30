<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orderProduct = OrderProduct::all();
        return response()->json([
            'data' => [
                'order_product' => $orderProduct,
            ],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $orderProduct = OrderProduct::create($request->all());
        return response()->json([
            'data' => [
                'order_product' => $orderProduct,
            ],
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $orderProduct = OrderProduct::find($id);
        return response()->json([
            'data' => [
                'order_product' => $orderProduct,
            ],
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $orderProduct = OrderProduct::find($id);
        $orderProduct->update($request->all());
        return response()->json([
            'data' => [
                'order_product' => $orderProduct,
            ],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $orderProduct = OrderProduct::find($id);
        $orderProduct->delete();
        return response()->json([
            'data' => [
                'order_product' => $orderProduct,
            ],
        ]);
    }
}
