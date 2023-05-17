<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SessionController;

Route::resource('Session', SessionController::class);

class SessionController extends Controller
{
    public function index() {
        return view('session.index');
    }
    public function create() {
        return view('session.create');
    }
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
            ]);
    }
    public function store(Request $request) {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        Account::create($request->post());

        return redirect()->route('session.index')->with('success','Account Created Successfully.');
    }
    public function show(Account $account) {
        return view('session.show', compact('account'));
    }
    public function edit(Account $account) {
        return view('session.edit', compact('account'));
    }
    public function update(Request $request, Account $account) {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $account->fill($request->post())->save();

        return redirect()->route('session.index')->with('success', 'Account Updated Successfully.');
    }
    public function destroy(Account $account) {
        $account->delete();
        return redirect()->route('session.index')->with('success', 'Account Deleted Successfully.');
    }
}
