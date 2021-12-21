<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Model\Indeks;
use App\Model\Satuan_jumlah;
use App\Model\Arsip_kondisi;
use App\Model\Arsip_lokasi;
use App\Model\Arsip_kategori;
use App\Model\Arsip_pemilik;
use App\Model\Data_arsip_inactive; 
use App\Model\Media;
use App\User;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function my_profile()
    {
         return view('public_admin.myprofile.my-profile');
    }

    public function ganti_username_email_admin($id, Request $request)
    {     
        $user = User::find($id);
        $user->username = $request->get('username'); 
        $user->email = $request->get('email'); 
        $user->save(); 
        return redirect('admin/myprofile');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function ganti_password_admin($id, Request $request)
    {    
        $user = User::find($id); 
        if(Hash::make($request->old_passwowrd) == $request->get('old_password_h')){
                session()->put('statusT', 'Password Sama Ulangi Lagi');
        }else{
            $user->password = bcrypt($request->get('new_password'));  
            $user->save(); 
            session()->put('status', 'Password Berhasil Diubah');
            return redirect('admin/myprofile'); 
        }  
      
         
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
