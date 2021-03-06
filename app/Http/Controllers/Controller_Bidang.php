<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Controller_Bidang extends Controller
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
        $bidang = DB::table('bidang')->get();
        $detail_kriteria = DB::table('detil_kriteria')->get();
        // dump($bidang);
        return view('bidang/index',['bidang'=>$bidang,'detail_kriteria'=>$detail_kriteria]);
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
            'nama_bidang' => 'required','penjelasan' => 'required','template' => 'required']);
        
        DB::table('bidang')->insert(['nama_bidang' => $request->nama_bidang,
        'penjelasan' => $request->penjelasan,'template' => $request->template
        ]);

        //mengalihkan halaman
        return redirect('/bidang/index')->with('insert','Data Berhasil Di
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
            'nama_bidang' => 'required','penjelasan' => 'required','template' => 'required']);

            DB::table('bidang')->where('ID_BIDANG',$request->id)->update([
                'nama_bidang' => $request->nama_bidang,
                'penjelasan' => $request->penjelasan,'template' => $request->template
            ]);
        
            return redirect('/bidang/index')->with('update','Data Berhasil Di
            Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('bidang')->where('ID_BIDANG',$id)->delete();
        return redirect('/bidang/index')->with('delete','Data Berhasil Di
        Hapus');
    }
}
