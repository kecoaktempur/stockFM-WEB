<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller {
    public function index() {
        return view('/sesi/homepage');
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
                return view('sesi.homepage');
            } else {
                return view('sesi.homepage')->withErrors('Username atau password yang anda masukkan salah');
            }
    }
    public function logout() {
        Auth::logout();
        Session::flush();
        return view('sesi.homepage');
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
        return view('sesi.homepage');
    }
    public function update() {
        return view('auth/updateprofile');
    }
    public function profileupdate(User $update, Request $request) {

        $validate = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'image' => ['required', 'mimes:jpeg,png,jpg,svg', 'max:2048px'],
        ]);

    $update = [
        'username' => $request->username,
        'fullname' => $request->fullname,
        'phone' => $request->phone,
        'location' => $request->location,
        'address' => $request->address,
        'profile_pict' => $profile_pict ?? auth()->user()->profile_pict
    ];
    if ($update['profile_pict'] != null){
        $fileName = Auth::id() . '.' . $update->profile_pict->extension();
        $update->profile_pict->storeAs('storage/profile_pictures/', $fileName);
        $input['profile_pict'] = $fileName;
    }
    auth()->user()->update($update);
    return view('/sesi/homepage');
}
    public function destroy(Account $account) {
        $account->delete();
        return redirect()->route('session.index')->with('success', 'Account Deleted Successfully.');
    }
    public function storepage() {
        return view('sesi.storepage');
    }
    public function aboutus() {
        return view('sesi.about-us');
    }
}
