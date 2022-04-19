<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sektor;
use App\Models\karyawan;
class ShopeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = sektor::all();
        $data = karyawan::all();
        return view('list-data-shopee', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-data-shopee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sektor = sektor::Create([
            'jabatan' => $request['jabatan'],
            'sektor_pekerjaan' => $request['sektor_pekerjaan'],
        ]);
        karyawan::Create([
            'sektor_id' => $sektor->id,
            'nama_karyawan' => $request['nama_karyawan'],
            'alamat_karyawan' => $request['alamat_karyawan'],
            'umur_karyawan' => $request['umur_karyawan'],
            'agama_karyawan' => $request['agama_karyawan'],
            'gender_karyawan' => $request['gender_karyawan'],
        ]);
        return redirect()->route('home')->with('tambah_data', 'Penambahan Data berhasil');
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
        $data = karyawan::where('id', $id)->first();
        return view('detail-data-shopee', [
            'data' => $data
        ]);
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
        $data = karyawan::where('id', $id)->first(); 
        return view('edit-data-shopee', [
            'data' => $data
        ]);
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
        $sektor = sektor::findOrFail($id);
        $karyawan = sektor::findOrFail($id);
        $sektor->update([
            'jabatan' => $request['jabatan'],
            'sektor_pekerjaan' => $request['sektor_pekerjaan'],
        ]);
        $karyawan->update([
            'sektor_id' => $sektor->id,
            'nama_karyawan' => $request['nama_karyawan'],
            'alamat_karyawan' => $request['alamat_karyawan'],
            'umur_karyawan' => $request['umur_karyawan'],
            'agama_karyawan' => $request['agama_karyawan'],
            'gender_karyawan' => $request['gender_karyawan'],
        ]);
        return redirect()->route('home')->with('edit_data-shopee', 'Pengeditan Data berhasil');
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
        $sektor = sektor::findOrFail($id);
        $sektor->delete();
        return redirect()->route('home')->with('hapus_data', 'Penghapusan data berhasil');
    }
}
