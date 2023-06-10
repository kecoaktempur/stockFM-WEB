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
                return view('index')->withErrors('Username atau password yang anda masukkan salah');
            }
    }
    public function logout() {
        Auth::logout();
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
    public function update(Request $request) {
        return view('auth/updateprofile');
    }
    public function profileupdate(Request $request) {

        $validate = Validator::make($request->all(), [
            'username' => ['required', 'string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255']
        ]);

        if (auth()->user()->profile_picture == null) {
            $validate_pict = Validator::make($request->all(), [
                'profile_pict' => ['required', 'image', 'max:1000']
            ]);
             # check if their is any error in image validation
            if ($validate_pict->fails()) {
                return response()->json(['code' => 400, 'msg' => $validate_pict->errors()->first()]);
        }
    }
    if ($validated->fails()) {
        return response()->json(['code' => 400, 'msg' => $validated->errors()->first()]);
    }
    if ($request->hasFile('profile_pict')) {
        $pictPath = 'storage/'.auth()->user()->profile_pict;
        if (File::exists($pictPath)) {
            File::delete($pictPath);
        }
        $profile_pict = $request->profile_pict->store('profile_pict', 'public');
    }
    auth()->user()->update([
        'name' => $request->name,
        'phone' => $request->phone,
        'location' => $request->location,
        'address' => $request->address,
        'profile_pict' => $profile_pict ?? auth()->user()->profile_pict
    ]);
    return response()->json(['code' => 200, 'msg' => 'profile updated successfully.']);
    return redirect()->back();
    }
    public function destroy(Account $account) {
        $account->delete();
        return redirect()->route('session.index')->with('success', 'Account Deleted Successfully.');
    }
    public function storepage() {
        return view('storepage');
    }
    public function aboutus() {
        return view('about-us');
    }
}
