<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $data = DB::table('categories')->paginate(15);
        return view('category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a new category in storage.
     *
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|unique',
        ]);

        $data = new Category;
        $data->description = $request->description;
        $data->save();

        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        $data = Category::find($id);
        return view('category/{category:description}', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $data = Category::find($id);
        return view('category.edit', compact('data'));
    }


    /**
     * @throws ValidationException
     */
    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $data = Category::find($id);
        $data->description = $request->description;
        $data->save();

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $data = Category::find($id);

        foreach ($data->products as $product) {
            $product->category = null;
        }

        $data->destroy();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully');
    }
}
