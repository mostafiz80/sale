@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        
        <div class="col-md-4 mb-3">
            <h1 class="h3 d-inline">View All Sales</h1>
            <a class="badge bg-dark text-white ms-2" href="/">
                Add new Sale
            </a>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="" class="form-label">From</label>
                <input type="date" class="form-control" name="startdate" id="" aria-describedby="helpId"
                    placeholder="" />
                <small id="helpId" class="form-text text-muted">Start date</small>
        </div>
            <div class="col mb-3">
                <label for="" class="form-label">To</label>
                <input type="date" class="form-control" name="enddate" id="" aria-describedby="helpId"
                    placeholder="" />
                <small id="helpId" class="form-text text-muted">End date</small>
        </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <thead>
                                    <tr>
                                        <th scope="col">#ID </th>
                                        <th scope="col">Daily Sales</th>
                                        <th scope="col">Daily Parchase</th>
                                        <th scope="col">Daily k-Net</th>
                                        <th scope="col">Daily Cash Profit</th>
                                        <th scope="col">Daily Total Profit</th>
                                        <th scope="col">Daily Closed Balance</th>
                                        <th scope="col">Added by</th>
                                        <th scope="col">Added Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                        <tr>
                                            <td scope="row">{{ $sale->id }}</td>
                                            <td>{{ $sale->daily_sale }}</td>
                                            <td>{{ $sale->daily_parchase }}</td>
                                            <td>{{ $sale->daily_knet }}</td>
                                            <td>{{ $sale->daily_cash_profit }}</td>
                                            <td>{{ $sale->total_daily_profit }}</td>
                                            <td>{{ $sale->daily_closed_balance }}</td>
                                            <td>{{ $sale->user->name }}</td>
                                            <td>{{ $sale->created_at }}</td>
                                            <td><a href="{{route('admin.edit', $sale->id)}}">Edit</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="card-footer">
                        <h1 class="card-title">this is card footer</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
