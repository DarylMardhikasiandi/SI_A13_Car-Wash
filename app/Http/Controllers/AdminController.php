<?php

namespace App\Http\Controllers;

use Error;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'tittle' => 'Login',
            'active' => 'login'
        ]);
    }

    public function home()
    {
        return view('admin.dashboard' , [
            'tiitle' => 'dashboard'
        ]);
    }

    public function riwayat()
    {
        return view('admin.riwayat' , [
            'tiitle' => 'riwayat',
            'post' => Booking::all()
        ]);
    }

    public function authenticate(Request $request)
    {
        $admin = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($admin)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError','Login Gagal!');
    }

    public function edit($id)
    {
        $edit= Booking::where('id',$id)->first(); 
        return view('admin.edit',compact('edit'), [
            'tittle'=>'edit'
        ]);
    }
    
    public function update(Request $request, $id){
        $update = Booking::where('id', $id)->update([
            'nama'=> $request->nama,
            'notelp'=> $request->notelp,
            'layanan'=> $request->layanan,
            'merk'=> $request->merk,
            'plat'=> $request->plat,
            'tanggal'=> $request->tanggal,
        ]);
        return redirect('/riwayat');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
