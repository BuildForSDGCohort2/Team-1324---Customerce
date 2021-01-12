<?php

namespace App\Http\Controllers\Admin;

use App\Expense;
use App\Income;
use App\Payment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $revenueChart  = null;
        $paymentsTable = null;

        if (!auth()->user()->is_admin) {
            return view('home', compact('revenueChart', 'paymentsTable'));
        }

        $chart_options = [
            'chart_title'         => 'Revenue by day',
            'report_type'         => 'group_by_date',
            'model'               => 'App\Payment',
            'group_by_field'      => 'created_at',
            'group_by_period'     => 'day',
            'aggregate_function'  => 'sum',
            'aggregate_field'     => 'paid_amount',
            'aggregate_transform' => function ($value) {
                return round($value / 100, 2);
            },
            'chart_type'          => 'bar',
            'filter_field'        => 'created_at',
            'filter_days'         => 30,
            'column_class'        => 'col-md-6',
            'continuous_time'     => Payment::count(),
        ];

        $revenueChart = new LaravelChart($chart_options);

        $paymentsTable = [
            'chart_title'    => 'Last Payments',
            'chart_type'     => 'latest_entries',
            'model'          => 'App\\Payment',
            'column_class'   => 'col-md-6',
            'entries_number' => '5',
            'fields'         => [
                'plan'       => 'title',
                'user'       => 'name',
                'amount'     => '',
                'created_at' => '',
            ],
        ];

        $paymentsTable['data'] = [];

        if (class_exists($paymentsTable['model'])) {
            $paymentsTable['data'] = $paymentsTable['model']::latest()
                ->take($paymentsTable['entries_number'])
                ->get();
        }
        $data['incomes'] = Income::where('user_id', Auth::User()->id)->whereYear('income_date', Carbon::now()->year)->whereMonth('income_date', Carbon::now()->month)->sum('income_amount');
        $data['expenses'] = Expense::where('user_id', Auth::User()->id)->whereYear('expense_date', Carbon::now()->year)->whereMonth('expense_date', Carbon::now()->month)->sum('expense_amount');
        $data['balance'] = $data['incomes'] - $data['expenses'];

        return view('home',$data (compact('revenueChart', 'paymentsTable')));


    }

}
