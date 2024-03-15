<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(){
        $sale = Sale::all();
    }
    public function create(){
        return view('admin.createsaleform');
    }
    public function store(Request $request){
        $data = $request->validate([
            'daily_sale' => 'required|numeric',
            'daily_parchase' => 'required|numeric',
            'daily_cash_profit' => 'required|numeric',
            'total_daily_profit' => 'required|numeric',
            'daily_closed_balance' => 'required|numeric',
        ]);

        $sale = Sale::create($data);
        return to_route();
    }
}
