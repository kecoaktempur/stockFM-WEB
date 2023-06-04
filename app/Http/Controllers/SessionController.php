<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index() {
        return view('index');
    }
    public function login(Request $request) {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
            ]);
            $infologin = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            if (Auth::attempt($infologin)) {
                return view('indexlogged');
            } else {
                return redirect('/')->withErrors('Username atau password yang anda masukkan salah');
            }
    }
    public function logout() {
        return view('index');
    }
    public function create(Request $request) {
        Session::flash('username', $request->username);
        Session::flash('email', $request->email);
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        User::create($data);
        return view('index');
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
