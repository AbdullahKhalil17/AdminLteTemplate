<?php

namespace App\Http\Controllers\PosController\SettingSysyem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PosModel\SettingSysyem\Unit;
use App\Models\PosModel\SettingSysyem\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unit = Unit::all();
        $product = Product::all();
        return view('SettingSystem.Product', compact('unit', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validate = $request -> all();
            $product = new Product();  
            $product -> unit_id = $request -> unit_id;
            $product -> productName = $request -> productName;
            $product -> productDescription = $request -> productDescription;
            $product -> productCategory = $request -> productCategory;
            $product -> productPrice = $request -> productPrice;
            $product -> stockQuantity = $request -> stockQuantity;
            $product ->save();
            return redirect()->route('Product.index');
        }
        catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
