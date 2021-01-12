<?php

namespace App\Http\Controllers;

use App\Expense;
use App\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
    // * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
    // * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['incomes'] = Income::where('user_id', Auth::User()->id)->whereYear('income_date', Carbon::now()->year)->whereMonth('income_date', Carbon::now()->month)->sum('income_amount');
        $data['expenses'] = Expense::where('user_id', Auth::User()->id)->whereYear('expense_date', Carbon::now()->year)->whereMonth('expense_date', Carbon::now()->month)->sum('expense_amount');
        $data['balance'] = $data['incomes'] - $data['expenses'];
        return view('home',$data);
    }
}
