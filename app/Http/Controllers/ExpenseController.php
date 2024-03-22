<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
class ExpenseController extends Controller
{
    public function viewexpenses(){
        $expenses = Expense::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get();
        return view('admin.expenseview', compact('expenses'));
    }
    public function create(){
        return view('admin.createexpense');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'expenses_desc' => 'required|string',
            'expenses_amount' => 'required|numeric',
        ]);
        $expenses = new Expense();
        $expenses->user_id = auth()->user()->id;
        $expenses->name = $request->name;
        $expenses->expenses_desc = $request->expenses_desc;
        $expenses->expenses_amount = $request->expenses_amount;

        $expenses->save();

        return to_route('admin.expenses.create')->with('success', 'Expenses Added Successfully');
    }





}
