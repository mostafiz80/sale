@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">View All Expenses</h1>
            <a class="badge bg-dark text-white ms-2" href="/">
                Add new Expenses
            </a>
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
                                        <th scope="col">Pay To</th>
                                        <th scope="col">Pay By</th>
                                        <th scope="col">Expenses Description</th>
                                        <th scope="col">Expenses Amount</th>
                                        <th scope="col">Expenses Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expenses as $expense)
                                    <tr>
                                        <td scope="row">{{$expense->id}}</td>
                                        <td>{{$expense->name}}</td>
                                        <td>{{$expense->user->name}}</td>
                                        <td>{{$expense->expenses_desc}}</td>
                                        <td>{{$expense->expenses_amount}}</td>
                                        <td>{{$expense->created_at}}</td>
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
