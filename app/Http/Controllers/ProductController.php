<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $misProductos = Product::paginate(10);
        return view(
            'products.index',
            [
                'products' => $misProductos
            ]
        );
    }

    public function create()
    {
        $categorias = Category::all();
        return view('products.create', compact('categorias'));
    }

    public function show($id)
    {
        $myProduct = Product::find($id);
        return view('products.show', [
            'product' => $myProduct,
        ]);
    }

    public function store(Request $request)
    {
        $productNuevo = new Product();
        $productNuevo->name = $request->nombre;
        $productNuevo->description = $request->descripcion;
        $productNuevo->price = $request->precio;
        $productNuevo->categories_id = $request->categoria;
        $productNuevo->url_image = "https://www.huaweicentral.com/wp-content/uploads/2024/09/Mate-XT-1.jpg";
        $productNuevo->save();

        return redirect()->route('products.show', $productNuevo->id);
    }
}
