<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        // $products = Product::all();
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }
    public function show($id) {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Show form to create a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Product added!');
    }
    public function destroy($id)
        {
        // Validate the ID
        if (!is_numeric($id)) {
            return redirect()->route('products.index')->with('error', 'Invalid product ID!');
        }

                // Find the product and delete it
            $product = Product::findOrFail($id);
            $product->delete();

            return redirect()->route('products.index')->with('success', 'Product deleted!');
    }
    // public function edit($id){
    //         $product = Product::findOrFail($id);
    //         return view('products.edit', compact('product'));
    // }
    // public function update(Request $request, $id)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //         'price' => 'required|numeric',
    //     ]);

    //     $product = Product::findOrFail($id);
    //     $product->update($validated);

    //     return redirect()->route('products.index')->with('success', 'Product updated!');
    // }
   
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Find the product by ID
        return view('products.edit', compact('product'));
    }

    // Update the product data
    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        // Find the product and update it
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }
    // // Show the view for a specific product
    // public function show($id)
    // {
    //     // Retrieve the product by its ID
    //     $product = Product::findOrFail($id);

    //     // Return the 'view' view with the product data
    //     return view('products.view', compact('product'));
    // }


}
