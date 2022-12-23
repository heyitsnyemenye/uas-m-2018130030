@extends('layouts.master')

@section('title','Account List')

@push('css_after')

    <style>
        td {
        max-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        }
    </style>
@endpush

@section('content')
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Transaction List</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('transactions.create') }}" class="btn btn-success">
                        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                        <span>Add New Transaction</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                    <th>#</th>
                    <th>Transaction Id</th>
                    <th>Kategori</th>
                    <th>Account ID</th>
                    <th>Tujuan</th>
                    <th>Nominal</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($transactions as $transaction)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $transction->id }}</td>
                            <td>{{ $transction->kategori }}</td>
                            <td>{{ $transction->account_id }}</td>
                            <td>{{ $transction->tujuan }}</td>
                            <td>{{ $transction->nominal }}</td>
                        </tr>

                    @empty
                        <tr>
                            <td align="center" colspan="6">No data yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
