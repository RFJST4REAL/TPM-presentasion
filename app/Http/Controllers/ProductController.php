<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return response()
     */
    public function index()
    {
        $products = product::latest();

        if(request('search')){
            $products->where('title', 'like', '%'. request('search') . '%' );
        }

        $products = Product::all();
        return view('products', compact('products'), [
            "title" => 'Home'
        ]);
    }


    // public function search(Request $request)
    // {
    //     $keyword = $request->search;
    //     $users = Product::where('name', 'like', "%" . $keyword . "%")->paginate(5);
    //     return view('products', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    /**
     * view cart
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart', ['title' => 'Cart']);
    }

    //addproduct
    public function addbarangview()
    {
        return view('createproduct', ['title' => 'Create']);
    }

    public function addbarang(Request $request)
    {
        Product::create([
            'name' => $request -> title,
            'price' => $request -> price,
            'description' => $request -> brand,
            'image' => $request -> image
        ]);
        // $imageName = time().'.'.$request->image->extension();
        $imageName = $request->image->getClientOriginalName();
        $request->image->storeAs('images', $imageName);
        return redirect('/');
    }


    /**
     * adding barang dari tombol home ke halaman cart
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // spesifikasi barang di cart
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        // taro ke barang
        session()->put('cart', $cart);
        return redirect()->back();
    }

    /**
     * update barang ke cart
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
//delete product
    public function delete($id)
    {
        $products = Product::all();
        Product::destroy($id);
        return view('deleteproduct', compact('products'), [
            "title" => 'delete'
        ]);
    }

    /**
     * delete di keranjang
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
