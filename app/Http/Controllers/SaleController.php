<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function viewsale(){
        $sales = Sale::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get();
        return view('admin.viewsale', compact('sales'));
    }
    public function create(){
        return view('admin.createsaleform');
    }
    public function store(Request $request){
        $data = $request->validate([
            'daily_sale' => 'required|numeric',
            'daily_parchase' => 'required|numeric',
            'daily_knet' => 'required|numeric',
            'daily_cash_profit' => 'required|numeric',
            'total_daily_profit' => 'required|numeric',
            'daily_closed_balance' => 'required|numeric',
        ]);

        $sale = new Sale();
        $sale->user_id = auth()->user()->id;
        $sale->daily_sale = $request->daily_sale;
        $sale->daily_parchase = $request->daily_parchase;
        $sale->daily_knet = $request->daily_knet;
        $sale->daily_cash_profit = $request->daily_cash_profit;
        $sale->total_daily_profit = $request->total_daily_profit;
        $sale->daily_closed_balance = $request->daily_closed_balance;

        $sale->save();
        return to_route('admin.create')->with('success', 'New sale information added.');
    }

    public function editsale(int $id){
        $editdata = Sale::find($id);
        return view('admin.editsale', compact('editdata'));
    }

    public function update(Request $request, int $id){
        $data = $request->validate([
            'daily_sale' => 'required|numeric',
            'daily_parchase' => 'required|numeric',
            'daily_knet' => 'required|numeric',
            'daily_cash_profit' => 'required|numeric',
            'total_daily_profit' => 'required|numeric',
            'daily_closed_balance' => 'required|numeric',
        ]);


        $sale = Sale::findOrFail($id);
        $sale->daily_sale = $request->daily_sale;
        $sale->daily_parchase = $request->daily_parchase;
        $sale->daily_knet = $request->daily_knet;
        $sale->daily_cash_profit = $request->daily_cash_profit;
        $sale->total_daily_profit = $request->total_daily_profit;
        $sale->daily_closed_balance = $request->daily_closed_balance;

        $sale->save();
        return to_route('admin.viewsale')->with('success', 'Sale information updated.');
    }

    public function generateview(){
        $sales = Sale::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get();
        $totalsale = Sale::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('daily_sale');
        $totalcashprofit = Sale::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('daily_cash_profit');
        $totalinknet = Sale::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('daily_knet');
        $totalprofit = Sale::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('total_daily_profit');

        $totalexpenses = Expense::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('expenses_amount');
        return view('admin.generatesalesview', compact(
            'sales',
            'totalsale', 
            'totalcashprofit',
            'totalinknet',
            'totalprofit',
            'totalexpenses',
        ));
    }
}
