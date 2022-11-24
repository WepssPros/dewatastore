<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(Request $request)
    {   
        $products = Product::with(['galleries'],['category'])->get();

        $productspopuler = Product::with(['galleries'],['category'])->where('tags', "populer")->get();
        return view('pages.frontend.index',[
            'products' => $products,
            'productspopuler'=>  $productspopuler,
        ]);
    }

      public function details(Request $request, $slug)
    {
        $product = Product::with(['galleries'])->where('slug', $slug)->firstOrFail();
        $recommendations = Product::with(['galleries'])->inRandomOrder()->limit(4)->get();

        return view('pages.frontend.details', compact('product','recommendations'));
    }

    public function carts(Request $request ,Cart $carts){
        $date= Carbon::now()->isoFormat('dddd');
        $carts = Cart::with(['product.galleries'],['product.category'])->where('users_id', Auth::user()->id)->get();
        $totalItem = Cart::with(['product.galleries'],['product.category'])->where('users_id', Auth::user()->id)->count();
        $subtotal = Cart::with(['product.galleries'],['product.category'])->where('users_id', Auth::user()->id)->sum('totalprice');
        $totalQuantity = Cart::with(['product.galleries'],['product.category'])->where('users_id', Auth::user()->id)->sum('quantity');
        return view('pages.frontend.carts',compact('carts'),[
            'carts' => $carts,
            'subtotal'=> $subtotal,
            'totalItem' => $totalItem,
            'totalQuantity' => $totalQuantity,
            'date' => $date,
        ]);
    }

    public function cartAdd(Request $request, $id)
    {
        //AMBIL DATA PRODUCT YANG MAU DI ADD
        $products = Product::findOrFail($id);
        Cart::create([
            'users_id' => Auth::user()->id,
            'products_id' => $id,
            'quantity' => $request->quantity,
            'totalprice'=> $products->price * $request->quantity,

        ]);

        $products->update([
            'stock' => $products->stock - $request->quantity
        ]);

        return redirect('carts')->with('success', 'Produk Telah Ditambahkan Ke Keranjang!');
    }

     public function cartDelete(Request $request, $id, Product $product)
    {
        $item = Cart::findOrfail($id);
        $products = Product::where('id', $item->products_id)->first();
        $products->update([
            'id' => $item->products_id,
            'stock' => $products->stock + $item->quantity,
        ]);
        $item->delete();

        return redirect('carts')->with('success', 'Produk Telah Di Hapus Dalam Keranjang');
    }

     public function checkout(Request $request)
    {
        $data = $request->all();

        // Get Carts data
        $carts = Cart::with(['product.galleries'])->where('users_id', Auth::user()->id)->get();

        $today = Carbon::today();
        // Add to Transaction data
        $data['users_id'] = Auth::user()->id;
        $data['email'] = Auth::user()->email;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['payment'] = $request->payment;
        
        $data['total_price'] = $carts->sum('totalprice');
        $data['tgl'] = $today;

        $transaction = Transaction::create($data);
        foreach($carts as $cart) {
             TransactionItem::create([
                'transactions_id' => $transaction->id,
                'users_id' => $cart->users_id,
                'products_id' => $cart->products_id,
                'quantity' => $cart->quantity
            ]);
        }
       Cart::where('users_id', Auth::user()->id)->delete();
       return redirect('checkout/success')->with('success','Pesanan Telah Dibuat ');
    }

     public function success(Request $request)
    {
        return view('pages.frontend.success');
    }

    public function products(Request $request){
        $products = Product::with(['galleries'],['category'])->get();
        return view('pages.frontend.product',[
            'products'=>$products,
        ]);
    }

    public function profile(){
        return view('pages.frontend.profile');
    }
}
