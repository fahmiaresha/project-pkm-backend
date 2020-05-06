<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Str;

class Controller_Tata_Cara extends Controller
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
        $tata_cara = DB::table('tata_cara')->get();
        // dump($bidang);
        return view('tata_cara/index',['tata_cara'=>$tata_cara]);
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
            'nama_tata_cara' => 'required','tata_cara' => 'required']);
        
        DB::table('tata_cara')->insert(['nama_tata_cara' => $request->nama_tata_cara,
        'tata_cara' => $request->tata_cara
        ]);

        //mengalihkan halaman
        return redirect('/tata_cara/index')->with('insert','Data Berhasil Di
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
            'nama_tata_cara' => 'required','tata_cara' => 'required']);

            DB::table('tata_cara')->where('ID_TATACARA',$request->id)->update([
                'nama_tata_cara' => $request->nama_tata_cara,
                'tata_cara' => $request->tata_cara,
            ]);
        
            return redirect('/tata_cara/index')->with('update','Data Berhasil Di
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
        DB::table('tata_cara')->where('ID_TATACARA',$id)->delete();
        return redirect('/tata_cara/index')->with('delete','Data Berhasil Di
        Hapus');
    }
}
