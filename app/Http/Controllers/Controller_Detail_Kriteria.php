<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Controller_Detail_Kriteria extends Controller
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
        $jenis_kriteria = DB::table('jenis_kriteria')->get();
        $detail_kriteria = DB::table('detil_kriteria')
                            ->join('jenis_kriteria','detil_kriteria.ID_JENIS_KRITERIA','=','jenis_kriteria.ID_JENIS_KRITERIA')
                            ->join('bidang','detil_kriteria.ID_BIDANG','=','bidang.ID_BIDANG')
                            ->select('detil_kriteria.*','jenis_kriteria.NAMA_JENIS','bidang.NAMA_BIDANG')
                            ->get();
        
        return view('detail_kriteria/index',['detail_kriteria'=>$detail_kriteria,'jenis_kriteria'=>$jenis_kriteria,
        'bidang'=>$bidang]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        DB::table('detil_kriteria')->insert(['ID_JENIS_KRITERIA' => $request->id_jenis_kriteria,
        'ID_BIDANG' => $request->id_bidang,'URAIAN_KRITERIA' => $request->uraian_kriteria
        ]);

        //mengalihkan halaman
        return redirect('/detail_kriteria/index')->with('insert','Data Berhasil Di
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
            
        DB::table('detil_kriteria')->where([['ID_JENIS_KRITERIA','=',$request->id],['ID_BIDANG','=',$request->id2]])->update([
            'ID_JENIS_KRITERIA' => $request->id_jenis_kriteria,
            'ID_BIDANG' => $request->id_bidang,
            'URAIAN_KRITERIA' => $request->uraian_kriteria
        ]);

        //mengalihkan halaman
        return redirect('/detail_kriteria/index')->with('update','Data Berhasil Di
         Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id2)
    {
        DB::table('detil_kriteria')->where([['ID_JENIS_KRITERIA','=',$id],['ID_BIDANG','=',$id2]])->delete();
        return redirect('/detail_kriteria/index')->with('delete','Data Berhasil Di
        Hapus');
    }
}
