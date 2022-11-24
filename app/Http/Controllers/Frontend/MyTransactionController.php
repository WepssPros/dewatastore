<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class MyTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactionpending = Transaction::where([
            'users_id' => Auth::user()->id,
            'status' => "PENDING",
            ])->count();
        $transactions = Transaction::with(['user'])->where('users_id', Auth::user()->id)->latest()->paginate(6);
        if (request()->ajax()) {
            $query = Transaction::with(['user'])->where('users_id', Auth::user()->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-blue-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 focus:outline-none focus:shadow-outline" 
                            href="' . route('mytransaction.show', $item->id) . '">
                            Show
                        </a>
                       ';
                })
                ->editColumn('total_price', function ($item) {
                    return number_format($item->total_price);
                })->addIndexColumn()
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.frontend.transaction.index' , compact('transactions','transactionpending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $mytransaction)
    {
        $transactionpending = Transaction::where([
            'users_id' => Auth::user()->id,
            'status' => "PENDING"])->count();
        $transactionitems = TransactionItem::with(['product'])->where('transactions_id', $mytransaction->id)->get();
        if (request()->ajax()) {
            $query = TransactionItem::with(['product'])->where('transactions_id', $mytransaction->id);

            return DataTables::of($query)
                ->editColumn('product.price', function ($item) {
                    return number_format($item->product->price);
                })
                ->make();
        }

        return view('pages.frontend.transaction.show', compact('mytransaction','transactionitems','transactionpending'));
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
    public function destroy($id)
    {
        //
    }
}
