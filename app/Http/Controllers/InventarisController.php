<?php

namespace App\Http\Controllers;

use App\Models\InventarisModel;
use App\Models\KategoriModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategori = KategoriModel::where('jenis_kategori', 'Inventaris')->get();
        if (is_null($request->cari_barang)) {
            $data = InventarisModel::paginate(10);
        } else {
            $data = InventarisModel::where('nama_barang',  'like', '%' . $request->cari_barang . '%')->get();
            return response()->json([
                "data" => $data,
                "message" => "berhasil tangkap",
                "success" => true
            ]);
        }


        return view('inventaris.index', compact("data", "kategori"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // anjay banget slebew
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
            'nama_barang' => 'required',
            'kode_alat' => 'required|unique:inventaris',
            'sumber' => 'required',
            'kategori' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'gambar' => 'required|max:1024|image'
        ]);

        if (!is_null($request->gambar)) {
            $gambar = $request->file('gambar');
            $namaFile = time() . "_" . $gambar->getClientOriginalName();
            Storage::disk('local')->put('/public/inventaris/' . $namaFile, File::get($gambar));

            InventarisModel::insert([
                'nama_barang' => $request->nama_barang,
                'kode_alat' => $request->kode_alat,
                'sumber' => $request->sumber,
                'tanggal_masuk' => $request->tanggal_masuk,
                'kategori' => $request->kategori,
                'lokasi' => $request->lokasi,
                'status' => $request->status,
                'gambar' => $namaFile
            ]);

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventarisModel  $inventarisModel
     * @return \Illuminate\Http\Response
     */
    public function show(InventarisModel $inventarisModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventarisModel  $inventarisModel
     * @return \Illuminate\Http\Response
     */
    public function edit(InventarisModel $inven, $kode)
    {
        $data = $inven::where('kode_alat', $kode)->get()[0];
        $kategori = KategoriModel::all();
        return view('inventaris.update', compact("data", "kategori"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventarisModel  $inventarisModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventarisModel $inven, $kode)
    {
        $getGambar = $inven::where('kode_alat', $kode)->get()[0];

        // jika form gambar terisi
        if (!is_null($request->gambar)) {

            // validasi 
            $request->validate([
                'nama_barang' => 'required',
                'kode_alat' => 'required',
                'sumber' => 'required',
                'kategori' => 'required',
                'lokasi' => 'required',
                'status' => 'required',
                'gambar' => 'required|max:1024|mimes:jpg, png, jpeg, JPG, PNG, JPEG'
            ]);

            // menghapus file foto lama
            Storage::delete('/public/inventaris/' . $getGambar->gambar);

            // menyimpan file baru
            $gambar = $request->file('gambar');
            $namaFile = time() . "_" . $gambar->getClientOriginalName();
            Storage::disk('local')->put('/public/inventaris/' . $namaFile, File::get($gambar));

            $inven::where('kode_alat', $kode)->update([
                'nama_barang' => $request->nama_barang,
                'kode_alat' => $request->kode_alat,
                'sumber' => $request->sumber,
                'tanggal_masuk' => $request->tanggal_masuk,
                'kategori' => $request->kategori,
                'lokasi' => $request->lokasi,
                'status' => $request->status,
                'gambar' => $namaFile
            ]);

            return redirect()->to('kelola-inventaris');
        } else {

            $request->validate([
                'nama_barang' => 'required',
                'kode_alat' => 'required',
                'sumber' => 'required',
                'kategori' => 'required',
                'lokasi' => 'required',
                'status' => 'required',
            ]);


            // jika form gambar tidak terisi
            $inven::where('kode_alat', $kode)->update([
                'nama_barang' => $request->nama_barang,
                'kode_alat' => $request->kode_alat,
                'sumber' => $request->sumber,
                'tanggal_masuk' => $request->tanggal_masuk,
                'kategori' => $request->kategori,
                'lokasi' => $request->lokasi,
                'status' => $request->status,

            ]);

            return redirect()->to('kelola-inventaris');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventarisModel  $inventarisModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventarisModel $inven, $kode)
    {
        // menghapus file foto lama
        $getGambar = $inven::where('kode_alat', $kode)->get()[0];
        Storage::delete('/public/inventaris/' . $getGambar->gambar);
        $inven::where('kode_alat', $kode)->delete();
        return redirect()->back();
    }
}
