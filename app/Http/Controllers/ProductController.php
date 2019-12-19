<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $phones = Product::where('jenis', 'LIKE', 'Handphone')->get();
            $laptops = Product::where('jenis', 'LIKE', 'Laptop')->get();
            $accessories = Product::where('jenis', 'LIKE', 'Aksesoris')->get();
            $id = Auth::user()->id;
            $count = Cart::where('user_id', $id)->count();
            $carts = Cart::where('user_id', $id)->get();
            return view('products/index', compact('count', 'carts', 'phones', 'laptops', 'accessories'));
        }else{
            $phones = Product::where('jenis', 'LIKE', 'Handphone')->get();
            $count = 0;
            return view('products/index', compact('count', 'phones', 'laptops', 'accessories'));
        }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(request()->hasFile('image')){
            if (Input::file('image')->isValid()) {
                $file = Input::file('image');
                $destination = 'assets/img/product/';
                $ext= $file->getClientOriginalExtension();
                $mainFilename = time();
                $file->move($destination, $mainFilename.".".$ext);
                $image = $mainFilename.".".$ext;
                }
            }

        return Product::create([
            'nama_produk' => $request['nama_produk'],
            'quantity' => $request['quantity'],
            'jenis' => $request['jenis'],
            'harga' => $request['harga'],
            'deskripsi' => $request['deskripsi'],
            'image' => $image,
        ]);
    
        return redirect('/admin/add-product');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $search = $product->get('search');
        $products = Product::where('nama_produk', 'LIKE', '%'.$search.'%')->orWhere('jenis', 'LIKE' , '%'.$search.'%')->orWhere('deskripsi', 'LIKE', '%'.$search.'%');
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function search(Request $request)
    {
        if (Auth::user()) {
            $search = $request->get('s');
            $products = Product::where('nama_produk', 'LIKE', '%'.$search.'%')->orWhere('jenis', 'LIKE' , '%'.$search.'%')->orWhere('deskripsi', 'LIKE', '%'.$search.'%')->get();
            $id = Auth::user()->id;
            $count = Cart::where('user_id', $id)->count();
            $carts = Cart::where('user_id', $id)->get();
            return view('products/search', compact('count', 'carts', 'products', 'search'));
        }else{
            $search = $request->get('s');
            $products = Product::where('nama_produk', 'LIKE', '%'.$search.'%')->orWhere('jenis', 'LIKE' , '%'.$search.'%')->orWhere('deskripsi', 'LIKE', '%'.$search.'%')->get();
            $count = 0;
            return view('products/search', compact('count', 'products', 'search'));
        }
    }
}
