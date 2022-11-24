<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Stockin;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {   
        $date = Carbon::today();
        
       
        
        $transactiontodays = Transaction::with(
            ['user'],
            ['items'],
        )->where('tgl' ,$date)->latest()->paginate('5');
        
        // Pendapatan
        $revenue = Transaction::where([
            'users_id' => Auth::user()->id,
            'status' => "SUCCESS",
            ])->sum('total_price');
        $revenuetoday = Transaction::where([
            'users_id' => Auth::user()->id,
            'status' => "SUCCESS", 
            'tgl' => $date,
            ])->sum('total_price');

        // countependapatan
        $transactionsukses = Transaction::where([
            'users_id' => Auth::user()->id,
            'status' => "SUCCESS",
        ])->count();
        $transactiononboarding = Transaction::where([
            'users_id' => Auth::user()->id,
            'status' => "ONBOARDING",
            ])->count();
        $transactionpending = Transaction::where([
            'users_id' => Auth::user()->id,
            'status' => "PENDING",
            ])->count();
        // CountStock


        //Product Category User Transaction Count
        $productCount = Product::count();
        $userCount = User::count();
        $categoryCount = ProductCategory::count();
        $transactionCount = Transaction::where([
            'users_id' => Auth::user()->id,
            'status' => "PENDING",
            ])->count();
        
       
       
       
        return view('pages.frontend.dashboard', compact(  
            'transactiontodays',
            'revenue',
            'revenuetoday',
            'transactionsukses',
            'transactiononboarding',
            'transactionpending',
            'productCount',
            'userCount',
            'categoryCount',
            'transactionCount',
            
        ),
       
    );
    }
}
