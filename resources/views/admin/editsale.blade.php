@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit sale</h1>
            <a class="badge bg-dark text-white ms-2" href="/">
                View all sale
            </a>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body col-md-6">
                        <form action="{{route('admin.update', $editdata->id )}}" method="post" class="form-control" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="daily_sale" class="form-label">Daily Sale</label>
                                <input type="number" value="{{$editdata->daily_sale}}" class="form-control" name="daily_sale" id="daily_sale"
                                    aria-describedby="helpId" placeholder="" />
                                <small id="helpId" class="form-text text-muted">Enter Amount "375000"</small>
                            </div>
                            <div class="mb-3">
                                <label for="daily_parchase" class="form-label">Daily Parchase</label>
                                <input type="number" value="{{$editdata->daily_parchase}}" class="form-control" name="daily_parchase" id="daily_parchase"
                                    aria-describedby="helpId" placeholder="" />
                                <small id="helpId" class="form-text text-muted">Enter Amount "375000"</small>
                            </div>
                            <div class="mb-3">
                                <label for="daily_knet" class="form-label">Daily k-NET</label>
                                <input type="number" value="{{$editdata->daily_knet}}" class="form-control" name="daily_knet" id="daily_knet"
                                    aria-describedby="helpId" placeholder="" />
                                <small id="helpId" class="form-text text-muted">Enter Amount "375000"</small>
                            </div>
                            <div class="mb-3">
                                <label for="daily_cash_profit" class="form-label">Daily Cash Profit</label>
                                <input type="number" value="{{$editdata->daily_cash_profit}}" class="form-control" name="daily_cash_profit" id="daily_cash_profit"
                                    aria-describedby="helpId" placeholder="" />
                                <small id="helpId" class="form-text text-muted">Enter Amount "375000"</small>
                            </div>
                            <div class="mb-3">
                                <label for="total_daily_profit" class="form-label">Daily Total Profit</label>
                                <input type="number" value="{{$editdata->total_daily_profit}}" class="form-control" name="total_daily_profit" id="total_daily_profit"
                                    aria-describedby="helpId" placeholder="" />
                                <small id="helpId" class="form-text text-muted">Enter Amount "375000"</small>
                            </div>
                            <div class="mb-3">
                                <label for="daily_closed_balance" class="form-label">Daily Closed Balance</label>
                                <input type="number" value="{{$editdata->daily_closed_balance}}" class="form-control" name="daily_closed_balance"
                                    id="daily_closed_balance" aria-describedby="helpId" placeholder="" />
                                <small id="helpId" class="form-text text-muted">Enter Amount "375000"</small>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Create Sale
                                </button>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer">
                        <h1 class="card-title">this is card footer</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
