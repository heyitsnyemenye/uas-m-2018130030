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
                        <h2>Account List</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('accounts.create') }}" class="btn btn-success">
                        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                        <span>Add New Account</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">

                <thead>
                    <tr>
                    <th>#</th>
                    <th>Account Id</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($accounts as $account)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $account->id }}</td>
                            <td>{{ $account->nama }}</td>
                            <td>{{ $account->jenis }}</td>
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
