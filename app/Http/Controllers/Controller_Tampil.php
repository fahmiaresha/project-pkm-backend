<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Controller_Tampil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('/login')->with('blm_login','Anda Belum Login !');
        }
        else{
        return view('dashboard');
        }
    }

    public function lupapassword(){
        return view('lupapassword');
    }

    public function getpassword(Request $request){
        $request->validate([
            'username' => 'required','email' => 'required|email']);
        $email=$request->email;
        $username=$request->username;
            $cekemail = DB::table('admin')->where('EMAIL_ADMIN',$email)->first();
            $cekusername = DB::table('admin')->where('USERNAME_ADMIN',$username)->first();
            
            if($cekemail!=null){
                if($cekusername!=null){
                   $hasil=$cekemail->PASSWORD_ADMIN;
                //    dump($hasil);
                   return redirect('/lupapassword')->with('get_pass',$hasil);
                }
                else{
                    // echo "Username Tidak Ada !";
                    return redirect('/lupapassword')->with('user_tdk_ada','a');
                }
            }
            else{
                // echo "Email Tidak Ada !";
                return redirect('/lupapassword')->with('email_tdk_ada','b');
            }
           
            
          

    }

    public function ubahpassword(){
        if(!Session::get('login')){
            return redirect('/login')->with('blm_login','Anda Belum Login !');
        }
        else{
        $admin = DB::table('admin')->get();
        // dump($admin);
        return view('ubahpassword',['admin'=>$admin]);
        }
    }

    public function profile(){
        if(!Session::get('login')){
            return redirect('/login')->with('blm_login','Anda Belum Login !');
        }
        else{
        $admin = DB::table('admin')->get();
        // dump($admin);
        return view('profile',['admin'=>$admin]);
        }
    }

    public function updateprofile(Request $request){
        $request->validate([
            'nama_admin' => 'required',
            'alamat_admin' => 'required',
            'telp_admin' => 'required',
            'email_admin' => 'required|email',
            'username_admin' => 'required',
            ]);

            DB::table('admin')->where('ID_ADMIN',$request->id)->update([
                'NAMA_ADMIN' => $request->nama_admin,
                'ALAMAT_ADMIN' => $request->alamat_admin,
                'NO_TELP_ADMIN' => $request->telp_admin,
                'EMAIL_ADMIN' => $request->email_admin,
                'USERNAME_ADMIN' => $request->username_admin
            ]);

            return redirect('/profile')->with('update_sukses','dd');
    }

    public function updatepassword(Request $request){
        // $admin = DB::table('admin')->get();
        $request->validate([
            'current_password' => 'required','password' => 'required','password_confirmation' => 'required']);
            $data = DB::table('admin')->where('ID_ADMIN',$request->id)->first();
            if($data->PASSWORD_ADMIN == $request->current_password){
                // echo 'password cocok';
                if($request->password == $request->password_confirmation){
                    if($request->current_password != $request->password){
                    // echo 'password dan konfirmasi password cocok';
                      DB::table('admin')->where('ID_ADMIN',$request->id)->update([
                        'PASSWORD_ADMIN' => $request->password,
                      ]);
                      return redirect('/ubahpassword')->with('password_sukses_diubah','bb');
                    }
                    else{
                        // echo 'password lama dan baru tidak boleh sama ';
                        return redirect('/ubahpassword')->with('password_baru_lama_sama','cc');
                    }
                }
                else{
                    // echo 'password dan konfirmasi password tidak cocok';
                    return redirect('/ubahpassword')->with('password_konfirmasipassword_tdk_cocok','dd');
                }
            }
            else{
                // echo "password tidak cocok";
                return redirect('/ubahpassword')->with('current_password_tidak_cocok','aaa');
            }

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request){
        $USERNAME_ADMIN = $request->USERNAME_ADMIN;
        $PASSWORD_ADMIN = $request->PASSWORD_ADMIN;
  
        $data = DB::table('admin')->where('USERNAME_ADMIN',$USERNAME_ADMIN)->first();
        if($data){ 
              if($data->PASSWORD_ADMIN == $PASSWORD_ADMIN){
                 Session::put('NAMA_ADMIN',$data->NAMA_ADMIN);
                 Session::put('id',$data->ID_ADMIN);
                //  Session::put('ID_ADMIN',$data->ID_ADMIN);
                 Session::put('login',TRUE);
                return redirect('/dashboard')->with('sukses_login','yay!');
            }
            else{
                return redirect('/login')->with('salah_password','Password Anda , Salah !');
            }
        }
        else{
            return redirect('/login')->with('tidak_terdaftar','Anda Belum Terdaftar , Silahkan Create Acoount !');
        }
     }


     public function logout(){
        Session::flush();
        return redirect('/login')->with('logout','Kamu sudah logout');
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
