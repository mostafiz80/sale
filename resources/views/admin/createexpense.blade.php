@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Add new Expenses</h1>
            <a class="badge bg-dark text-white ms-2" href="/">
                View all Expenses
            </a>
        </div>
       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body col-md-6">
                        <form action="{{route('admin.expense.store')}}" method="post" class="form-control" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Pay  To / Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    aria-describedby="helpId" placeholder="" />
                                <small id="helpId" class="form-text text-muted">Enter reciver name</small>
                            </div>
                            <div class="mb-3">
                                <label for="expenses_desc" class="form-label">Expenses Description</label>
                                <input type="text" class="form-control" name="expenses_desc" id="expenses_desc"
                                    aria-describedby="helpId" placeholder="" />
                                <small id="helpId" class="form-text text-muted">Write something about the payment</small>
                            </div>
                            <div class="mb-3">
                                <label for="expenses_amount" class="form-label">Expenses Amount</label>
                                <input type="number" class="form-control" name="expenses_amount" id="expenses_amount"
                                    aria-describedby="helpId" placeholder="" />
                                <small id="helpId" class="form-text text-muted">Enter Amount "375000"</small>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Create Expenses
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
