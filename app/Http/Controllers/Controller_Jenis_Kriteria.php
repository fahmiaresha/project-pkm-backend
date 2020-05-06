<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Controller_Jenis_Kriteria extends Controller
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
        $jk = DB::table('jenis_kriteria')->get();
        $detail_kriteria = DB::table('detil_kriteria')->get();
        // dump($bidang);
        return view('jenis_kriteria/index',['jenis_kriteria'=>$jk,'detail_kriteria'=>$detail_kriteria]);
        }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required']);
        
        DB::table('jenis_kriteria')->insert(['nama_jenis' => $request->nama_jenis,
        ]);

        //mengalihkan halaman
        return redirect('/jenis_kriteria/index')->with('insert','Data Berhasil Di
         Tambahkan');
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
    public function update(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required']);
    
        DB::table('jenis_kriteria')->where('ID_JENIS_KRITERIA',$request->id)->update([
            'nama_jenis' => $request->nama_jenis
        ]);

        //mengalihkan halaman
        return redirect('/jenis_kriteria/index')->with('update','Data Berhasil Di
         Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('jenis_kriteria')->where('ID_JENIS_KRITERIA',$id)->delete();
        return redirect('/jenis_kriteria/index')->with('delete','Data Berhasil Di
        Hapus');
    }
}
