<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductCreateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $data = DB::table('products')->paginate(15);
        return view('product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $data = Category::all();

        return view('product.create', ["categories" => $data]);
    }

    public function store(ProductCreateRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $data = Product::find($id);

        return view('product.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        return view('product.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'string',
            'price' => 'number',
            'description' => 'string',
            'image' => 'string',
        ]);

        $data = $request->all();
        $data['image'] = $request->file('image')->store('images', 'public');
        Product::find($id)->update($data);

        return redirect()->route('productos.index')->with('success', 'Product actualizado correctamente.');
    }

    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $product = Product::find($id);
        foreach ($product->images as $image) {
            $image->delete();
        }
        Product::destroy($id);
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}