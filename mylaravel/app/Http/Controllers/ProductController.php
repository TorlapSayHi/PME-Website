<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Assuming you have a Product model
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Display a listing of the products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show the form for creating a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product in storage
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();

            // $path = $image->storeAs('public/images', $imageName);
            $image->move(storage_path('app/public/images'), $imageName);



            Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price ? $request->price : null,
                'image' => $imageName,
            ]);
            

            return redirect()->route('products.index')->with('success', 'Product created!');
        }

        return redirect()->back()->with('error', 'Image is required.');
    }


    


    // Show the form for editing the specified product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update the specified product in storage
        public function update(Request $request, $id)
        {
            $product = Product::findOrFail($id);

            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price ? $request->price : null;

            if ($product->save()) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false], 500);
            }
        }

    // Remove the specified product from storage
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
