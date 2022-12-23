<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


class AccountController extends Controller
{
    public function index()
    {
        $account = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'jenis' => 'required|max:1',
            ]);
            Account::create($validateData);

            $request->session()->flash('success',"Successfully adding {$validateData['nama']}!");
            return redirect()->route('accounts.index');
    }

    public function show(Account $account)
    {
        return view('accounts.index', compact('accounts'));
    }

    public function update(Request $request, Account $account)
    {
        dump($request->all());
        dump($account);
    }
    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->route('accounts.index')->with(
        'success',"Successfully deleting {$account['id']}!");
    }
}
