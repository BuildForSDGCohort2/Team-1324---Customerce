@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-sm-12 mb-3">
                        <ul class="list-group">
                            <li class="list-group-item bg-info text-center text-white">
                                <span>This Month Cost</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total Income
                                <span class="badge badge-primary badge-pill incomeValue">{{ $incomes}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total Expense
                                <span class="badge badge-danger badge-pill expenseValue">{{ $expenses }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Balance
                                <span class="badge badge-primary badge-pill">{{ $balance }}</span>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!is_null($revenueChart))
                        <div class="row">
                            <div class="{{ $revenueChart->options['column_class'] }}">
                                <h3>Last 30 Days Revenue</h3>
                                {!! $revenueChart->renderHtml() !!}
                            </div>
                            <div class="{{ $paymentsTable['column_class'] }}" style="overflow-x: auto;">
                                <h3>{{ $paymentsTable['chart_title'] }}</h3>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            @foreach($paymentsTable['fields'] as $key => $value)
                                                <th>
                                                    {{ ucfirst($key) }}
                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($paymentsTable['data'] as $entry)
                                            <tr>
                                                @foreach($paymentsTable['fields'] as $key => $value)
                                                    <td>
                                                        @if($value === '')
                                                            {{ $entry->{$key} }}
                                                        @elseif(is_iterable($entry->{$key}))
                                                            @foreach($entry->{$key} as $subEentry)
                                                                <span class="label label-info">{{ $subEentry->{$value} }}</span>
                                                            @endforeach
                                                        @else
                                                            {{ $entry->{$key}->{$value} }}
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="{{ count($paymentsTable['fields']) }}">{{ __('No entries found') }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @else
                        You are logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent

@if(!is_null($revenueChart))
    {!! $revenueChart->renderChartJsLibrary() !!}
    {!! $revenueChart->renderJs() !!}
@endif

@endsection
