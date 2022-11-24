<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Stockin;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $products = Product::with('category')->get();
     $transactionpending = Transaction::where('status', "PENDING")->count();
        if (request()->ajax()) {
            $query = Stockin::with('product');

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        
                        
                        <form class="inline-block" action="' . route('dashboard.stock.destroy', $item->id) . '" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
                })
                ->editColumn('price', function ($item) {
                    return number_format($item->price);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.stock.index',[
            'products' => $products,
            'transactionpending' => $transactionpending
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $transactionpending = Transaction::where('status', "PENDING")->count();
        $products = Product::all();
        return view('pages.dashboard.stock.create', compact('products','transactionpending'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $data = $request->all();
        $product = Product::with('category')->where('id', $request->products_id)->first();
        
        Stockin::create($data);
        
        $product->update([
            'stock' => $request->stock_in + $product->stock,
        ]);
     
        return redirect()->route('dashboard.stock.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stockin $stock, Product $product)
    {       
        
        $product = Product::with('category')->where('id', $stock->products_id)->first();

        $stock->delete();
        $product->update([
            'stock' =>   $product->stock - $stock->stock_in,
        ]);
        return redirect()->route('dashboard.stock.index');
    }
}
