<?php

namespace App\Http\Controllers;

use App\Models\PembayaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nama_siswa = DB::table('siswa')->get();
        $nama_jurusan = DB::table('category')->get();
        $kelas_siswa = DB::table('type')->get();

        $data = PembayaranModel::all();
        return view('pembayaran.index', compact("nama_siswa", "nama_jurusan", "kelas_siswa", "data"));
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
        $validated = $request->validate([
            'nama_siswa' => 'required',
            'pembangunan' => 'required',
            'tunggakan' => 'required',
            'spp' => 'required',
            'lab' => 'required',
            'osis' => 'required',
            'psg' => 'required',
            'uas' => 'required',
            'keterangan' => 'required',
            'semester_ganjil' => 'required',
            'semester_genap' => 'required',
        ]);

        PembayaranModel::create([
            'siswa_id' => (int)$request->nama_siswa,
            'pembangunan' => $request->pembangunan,
            'tunggakan' => $request->tunggakan,
            'spp' => $request->spp,
            'lab' => $request->lab,
            'osis' => $request->osis,
            'psg' => $request->psg,
            'uas' => $request->uas,
            'keterangan' => $request->keterangan,
            'semester_ganjil' => $request->semester_ganjil,
            'semester_genap' => $request->semester_genap,
        ]);

        return redirect()->to('/pembayaran')->with('success', 'Berhasil Menambah Data Pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function show(PembayaranModel $pembayaranModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PembayaranModel $pembayaranModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembayaranModel $pembayaranModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembayaranModel $pembayaranModel)
    {
        //
    }
}
