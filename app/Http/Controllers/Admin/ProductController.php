<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.ecommerce.products.product-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.ecommerce.products.product-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function getProductList() {
        return response()->json(
            [
                "data" => [
                    [
                        "id" => 1,
                        "product_name" => "iPhone 14 Pro",
                        "category" => 2,
                        "stock" => 1,
                        "sku" => 19472,
                        "price" => "$999",
                        "qty" => 665,
                        "status" => 3,
                        "image" => "product-1.png",
                        "product_brand" => "Super Retina XDR display footnote Pro Motion technology"
                    ],
                    [
                        "id" => 2,
                        "product_name" => "Echo Dot (4th Gen)",
                        "category" => 2,
                        "stock" => 0,
                        "sku" => 72836,
                        "price" => "$25.50",
                        "qty" => 827,
                        "status" => 2,
                        "image" => "product-2.png",
                        "product_brand" => "Echo Dot Smart speaker with Alexa"
                    ],
                    [
                        "id" => 3,
                        "product_name" => "Dohioue Wall Clock",
                        "category" => 0,
                        "stock" => 0,
                        "sku" => 29540,
                        "price" => "$16.34",
                        "qty" => 804,
                        "status" => 2,
                        "image" => "product-3.png",
                        "product_brand" => "Modern 10 Inch Battery Operated Wall Clocks"
                    ],
                    [
                        "id" => 4,
                        "product_name" => "INZCOU Running Shoes",
                        "category" => 3,
                        "stock" => 0,
                        "sku" => 49402,
                        "price" => "$36.98",
                        "qty" => 528,
                        "status" => 1,
                        "image" => "product-4.png",
                        "product_brand" => "Lightweight Tennis Shoes Non Slip Gym Workout Shoes"
                    ],
                    [
                        "id" => 5,
                        "product_name" => "Apple Watch Series 7",
                        "category" => 4,
                        "stock" => 0,
                        "sku" => 46658,
                        "price" => "$799",
                        "qty" => 851,
                        "status" => 1,
                        "image" => "product-5.png",
                        "product_brand" => "Starlight Aluminum Case with Starlight Sport Band."
                    ],
                    [
                        "id" => 6,
                        "product_name" => "Meta Quest 2",
                        "category" => 4,
                        "stock" => 1,
                        "sku" => 57640,
                        "price" => "$299",
                        "qty" => 962,
                        "status" => 1,
                        "image" => "product-6.png",
                        "product_brand" => "Advanced All-In-One Virtual Reality Headset"
                    ],
                    [
                        "id" => 7,
                        "product_name" => "MacBook Pro 16",
                        "category" => 2,
                        "stock" => 1,
                        "sku" => 92885,
                        "price" => "$2648.95",
                        "qty" => 965,
                        "status" => 2,
                        "image" => "product-7.png",
                        "product_brand" => "Laptop M2 Pro chip with 12‑core CPU and 19‑core GPU"
                    ],
                    [
                        "id" => 8,
                        "product_name" => "SAMSUNG Galaxy S22 Ultra",
                        "category" => 2,
                        "stock" => 1,
                        "sku" => 75257,
                        "price" => "$899",
                        "qty" => 447,
                        "status" => 2,
                        "image" => "product-8.png",
                        "product_brand" => "Android Smartphone, 256GB, 8K Camera"
                    ],
                    [
                        "id" => 9,
                        "product_name" => "Air Jordan",
                        "category" => 3,
                        "stock" => 0,
                        "sku" => 31063,
                        "price" => "$125",
                        "qty" => 942,
                        "status" => 3,
                        "image" => "product-9.png",
                        "product_brand" => "Air Jordan is a line of basketball shoes produced by Nike"
                    ],
                    [
                        "id" => 10,
                        "product_name" => "VISKABACKA",
                        "category" => 1,
                        "stock" => 0,
                        "sku" => 91848,
                        "price" => "$190.45",
                        "qty" => 133,
                        "status" => 1,
                        "image" => "product-10.png",
                        "product_brand" => "Armchair, Skartofta black/light grey"
                    ],
                ]
            ]
        );
    }
}
