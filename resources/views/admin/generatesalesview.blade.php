@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Invoice</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body m-sm-3 m-md-5">
                    <div class="mb-4">
                        Hello <strong>{{Auth()->user()->name}}</strong>,
                        <br>
                        This is the receipt for a total sales of Baqala Kadi Al Khalij<strong>$268.00</strong> 
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-muted">Payment No.</div>
                            <strong>741037024</strong>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="text-muted">Date</div>
                            <strong>June 2, 2023 - 03:45 pm</strong>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row mb-4">


                    </div>

                    <table class="table table-sm">
                        <thead>
                            <tr class="table-dark">
                                <th>Created Date</th>
                                <th>Daily Sale Amount</th>
                                <th>Daily Cash Profit</th>
                                <th>Daily K-Net</th>
                                <th class="text-end">Total Profit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $sale)
                            <tr>
                                <td>{{ date('d-m-Y', strtotime($sale->created_at)) }}</td>
                                <td>{{$sale->daily_sale}}</td>
                                <td>{{$sale->daily_cash_profit}}</td>
                                <td>{{$sale->daily_knet}}</td>
                                <td class="text-end">{{$sale->total_daily_profit	}}</td>
                            </tr> 
                            @endforeach



                            <tr class="table-dark">
                                <th>Total Amout </th>
                                <th>{{$totalsale}}</th>
                                <th>{{$totalcashprofit}}</th>
                                <th>{{$totalinknet}}</th>
                                <th class="text-end">{{$totalprofit}}</th>
                            </tr>
                            <tr>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td>----</td>
                                <td class="text-end">----</td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th> </th>
                                <th>Total Profit </th>
                                <th></th>
                                <th class="text-end">{{$totalprofit}}</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th> </th>
                                <th>In k-Net</th>
                                <th></th>
                                <th class="text-end">{{$totalinknet}}</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th> </th>
                                <th></th>
                                <th></th>
                                <th ></th>
                            </tr>
                            <tr>

                                <th>&nbsp;</th>
                                <th> </th>
                                <th>Cash Profit</th>
                                <th> </th>
                                <th class="text-end"> {{$totalcashprofit}}</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th> </th>
                                <th>Expenses</th>
                                <th> </th>
                                <th class="text-end"> - {{$totalexpenses}}</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th> </th>
                                <th>Cash Available</th>
                                <th> </th>
                                @php
                                $ab = personal_calculator($totalcashprofit, '-', $totalexpenses);
                             @endphp
                                <th class="text-end">= {{ $ab }}</th>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-center">
                        <p class="text-sm">
                            <strong>Extra note:</strong>
                            Please send all items at the same time to the shipping address.
                            Thanks in advance.
                        </p>

                        <a href="#" class="btn btn-primary">
                            Print this receipt
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
