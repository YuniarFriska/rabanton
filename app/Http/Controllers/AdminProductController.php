<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Product Management',
            'products' => Product::get(),
            'content' => 'admin/product/index',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Add Product',
            'content' => 'admin/product/add',
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle Picture Upload
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $fileName = time() . '-' . $picture->getClientOriginalName();
            $storagePath = 'uploads/products';
            $picture->move($storagePath, $fileName);
            $data['picture'] = $storagePath . '/' . $fileName;
        }

        Product::create($data);
        Alert::success('Success', 'Product added successfully');
        return redirect('/admin/product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Product',
            'product' => Product::findOrFail($id),
            'content' => 'admin/product/add',
        ];
        return view('admin.layouts.wrapper', $data);
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
        $product = Product::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle Picture Upload
        if ($request->hasFile('picture')) {
            if ($product->picture != null && file_exists($product->picture)) {
                unlink($product->picture);
            }

            $picture = $request->file('picture');
            $fileName = time() . '-' . $picture->getClientOriginalName();
            $storagePath = 'uploads/products';
            $picture->move($storagePath, $fileName);
            $data['picture'] = $storagePath . '/' . $fileName;
        } else {
            $data['picture'] = $product->picture;
        }

        $product->update($data);
        Alert::success('Success', 'Product updated successfully');
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->picture != null && file_exists($product->picture)) {
            unlink($product->picture);
        }

        $product->delete();
        Alert::success('Success', 'Product deleted successfully');
        return redirect('/admin/product');
    }
}
