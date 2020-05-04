<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Controller_Kontak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = DB::table('contact_person')->get();
        return view('kontak/index',['kontak'=>$kontak]);
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
            'organisasi' => 'required','nomer_tlp_1' => 'required|numeric']);
        
        DB::table('contact_person')->insert(['organisasi' => $request->organisasi,
        'nomer_tlp_1' => $request->nomer_tlp_1,'nomer_tlp_2' => $request->nomer_tlp_2,
        'line' => $request->line,'email_cp' => $request->email,'instagram' => $request->instagram
        ]);

        //mengalihkan halaman
        return redirect('/kontak/index')->with('insert','Data Berhasil Di
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
            'organisasi' => 'required','nomer_tlp_1' => 'required|numeric']);

            DB::table('contact_person')->where('ID_CP',$request->id)->update([
                'organisasi' => $request->organisasi,
                'nomer_tlp_1' => $request->nomer_tlp_1,'nomer_tlp_2' => $request->nomer_tlp_2,
                'line' => $request->line,'email_cp' => $request->email,'instagram' => $request->instagram
            ]);
        
            return redirect('/kontak/index')->with('update','Data Berhasil Di
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
        DB::table('contact_person')->where('ID_CP',$id)->delete();
        return redirect('/kontak/index')->with('delete','Data Berhasil Di
        Hapus');
    }
}
