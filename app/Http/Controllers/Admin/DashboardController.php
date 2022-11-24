<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Stockin;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index(Request $request)
    {   
        $date = Carbon::today();
        $products = Product::with(['galleries'],['category'])->get();
       
        $transactions = Transaction::with(['user'],['items'])->latest()->get();
        $transactiontodays = Transaction::with(
            ['user'],
            ['items'],
        )->where('tgl' ,$date)->latest()->paginate('5');
        
        // Pendapatan
        $revenue = Transaction::where('status' , "SUCCESS")->sum('total_price');
        $revenuetoday = Transaction::where([
            'status' => "SUCCESS", 
            'tgl' => $date,
            ])->sum('total_price');

        // countependapatan
        $transactionsukses = Transaction::where('status', "SUCCESS")->count();
        $transactiononboarding = Transaction::where('status', "ONBOARDING")->count();
        $transactionpending = Transaction::where('status', "PENDING")->count();
        // CountStock

        $stockin = Stockin::sum('stock_in');
        $stockout = TransactionItem::with(['transaction'])->sum('quantity');
        $allstock = Product::with(['galleries','stocks','category'])->sum('stock');

        //Product Category User Transaction Count
        $productCount = Product::count();
        $userCount = User::count();
        $categoryCount = ProductCategory::count();
        $transactionCount = Transaction::where('status' , "PENDING")->count();
        
       
       
       
        return view('pages.dashboard.index', compact(
            'products',
            'transactions',
            'transactiontodays',
            'revenue',
            'revenuetoday',
            'transactionsukses',
            'transactiononboarding',
            'transactionpending',
            'stockin',
            'stockout',
            'allstock',
            'productCount',
            'userCount',
            'categoryCount',
            'transactionCount',
            
        ),
       
    );
    }
}
