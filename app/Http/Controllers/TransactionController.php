<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'kategori' => 'required',
            'nominal' => 'required',
            'kategori' => 'required',
            'account_id' => 'required|max:16',
            ]);
            Transaction::create($validateData);

            $request->session()->flash('success',"Successfully adding {$validateData['nama']}!");
            return redirect()->route('transactions.index');
    }

    public function show(Transaction $transaction)
    {
        return view('transactions.index', compact('transactions'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        dump($request->all());
        dump($transaction);
    }
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('accounts.index')->with(
        'success',"Successfully deleting {$transaction['id']}!");
    }
}
