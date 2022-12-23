@extends('layouts.master')

@section('title', 'Add New Transaction')

@section('content')

<h2>Add New Transaction</h2>
<form action="{{ route('transactions.store') }}" method="POST">
@csrf
<div class="row">

        {{-- Id --}}
        <div class="col-md-6 mb-3">
            <label for="id">Transaction Id</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror"
                name="id" id="id" value="{{ old('id') }}">

                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        {{-- Kategori Transaksi --}}
        <div class="col-md-6 mb-3">
            <label for="kategori">Kategori Transaksi</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                name="kategori" id="kategori" value="{{ old('kategori') }}">

                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        {{-- Nominal --}}
        <div class="col-md-6 mb-3">
            <label for="nominal">Nominal</label>
                <input type="number" class="form-control @error('nominal') is-invalid @enderror"
                name="nominal" id="nominal"
                min ="10000" max = "999999999999"
                value="{{ old('nominal') }}">

                @error('nominal')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        {{-- Tujuan --}}
        <div class="col-md-6 mb-3">
            <label for="tujuan">Tujuan Transaksi</label>
                <input type="text" class="form-control @error('tujuan') is-invalid @enderror"
                name="tujuan" id="tujuan" value="{{ old('tujuan') }}">

                @error('tujuan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

<button class="btn btn-primary btn-lg btn-block" type="submit">Add Account</button>
</form>
@endsection
