@extends('layouts.master')

@section('title', 'Edit Account')

@section('content')

<h2>Edit Account</h2>
<form action="" method="POST">
@method('PATCH')
@csrf
<div class="row">

        {{-- Id --}}
        <div class="col-md-6 mb-3">
            <label for="id">Account Id</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror"
                name="id" id="id" value="{{ old('id') ?? $account->id}}">

                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>

        {{-- Nama --}}
        <div class="col-md-6 mb-3">
            <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                name="nama" id="nama" value="{{ old('nama') ?? $account->nama }}">

                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>

        {{-- Jenis Kelamin --}}
        <div class="col-md-6 mb-3">
            <label for="jenis">Jenis Kelamin</label>
            <input type="text" class="form-control @error('jenis') is-invalid @enderror"
            name="jenis" id="jenis" value="{{ old('jenis') ?? $account->jenis }}">

            @error('jenis')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
    </form>
    @endsection
