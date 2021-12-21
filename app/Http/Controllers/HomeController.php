<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Indeks;
use App\Model\Satuan_jumlah;
use App\Model\Arsip_kondisi;
use App\Model\Arsip_lokasi;
use App\Model\Arsip_kategori;
use App\Model\Arsip_pemilik;
use App\Model\Data_arsip_inactive; 
use Illuminate\Support\Facades\Validator;
use App\Model\Media;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    { 
        $data_inaktif = Data_arsip_inactive::count_media();
        $total_inaktif = Data_arsip_inactive::count_inaktif();
        $data_lokasi = Arsip_lokasi::all();
        $data_kondisi = Arsip_kondisi::all();  
        return view('public_admin.home',compact('data_inaktif','total_inaktif'));
    }

    public function master_user()
    { 
        $data_user = User::all();    
        return view('public_admin.user.user',compact('data_user'));
    }

    public function modal_tambah()
    {
        return view('public_admin.user.modal_tambah_user');
    }

    public function simpan_user(Request $request)
    { 
        $user = new User();
        $user->name = $request->get('nama'); 
        $user->password = Hash::make($request->password); 
        $user->email = $request->get('email'); 
        $user->username = $request->get('username');  
        $user->role = $request->get('role_id');   
        $user->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect ('/admin/user');
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_user = User::find($id);   
        return view('public_admin.user.modal_ubah_user',compact('data_user'));
    }

    public function simpan_user_ubah(Request $request,$id)
    { 
        $validator= Validator::make($request->all(),[ 
            'nama' => 'required', 
            'username' => 'required',
            'password' => 'required',  
        ], [
            'nama.required' => 'Data nama Harus Diisi', 
            'keterangan.required' => 'Jenis Harus Diisi',
            'password.required' => 'Password Harus Diisi',  
        ]);
        if ($validator->fails()) {
            $msg = "";
            foreach ($validator->messages()->all() as $message) {
                $msg .= $message . ".
                ";
            }
            session()->put('statusT', 'Kesalahan pengisian form ubah: ' . $msg); 
            //return view('ajax-result.ruangrapat.insert');
        } else {
        $user = User::find($id);
        $user->name = $request->get('nama');  
        $user->email = $request->get('email'); 
        $user->username = $request->get('username'); 
        $user->save();
        session()->put('status', 'User berhasil diubah!'); 
        } 
        return redirect('/admin/user');
    }

    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/user');
    }

}
