<?php

namespace App\Http\Controllers;

use App\Models\PembayaranModel;
use Carbon\Carbon;
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

        if ($request->search != null) {
            $data = DB::table('siswa')
                ->join('category', 'siswa.category_id', 'category.id')
                ->join('type', 'siswa.type_id', 'type.id')
                ->join('pembayaran', 'pembayaran.siswa_id', 'siswa.id')
                ->where('siswa.nama_siswa', 'like', '%' . $request->search . '%')
                ->get();

            return response()->json([
                "data" => $data,
                "message" => "berhasil tangkap",
                "success" => true
            ]);
        }

        if ($request->tanggal1 && $request->tanggal2 != null) {
            $data = DB::table("siswa")
                ->join('category', 'siswa.category_id', 'category.id')
                ->join('type', 'siswa.type_id', 'type.id')
                ->join('pembayaran', 'pembayaran.siswa_id', 'siswa.id')
                ->whereBetween('pembayaran.tanggal_bayar', [$request->tanggal1, $request->tanggal2])
                ->get();

            return response()->json([
                "data" => $data,
                "message" => "berhasil tangkap",
                "success" => true
            ]);
        }


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
            'tanggal_bayar' => Carbon::now()
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
    public function edit(PembayaranModel $pembayaranModel, $id)
    {
        $data = $pembayaranModel->find($id);
        $nama_siswa = DB::table('siswa')->get();
        return view('pembayaran.update', compact("data", "nama_siswa"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembayaranModel $pembayaranModel, $id)
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

        $pembayaranModel->find($id)->update([
            'siswa_id' => (int)$request->nama_siswa,
            'pembangunan' => $request->pembangunan,
            'tunggakan' => $request->tunggakan,
            'spp' => $request->spp,
            'lab' => $request->lab,
            'osis' => $request->osis,
            'psg' => $request->psg,
            'uas' => $request->uas,
            'semester_ganjil' => (int)$request->semester_ganjil,
            'semester_genap' => (int)$request->semester_genap,
            'keterangan' => $request->keterangan,
            'tanggal_update' => Carbon::now()
        ]);

        return redirect()->to('/pembayaran')->with('success', 'Berhasil Memperbarui Data Pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembayaranModel $pembayaranModel, $id)
    {

        $pembayaranModel->where('id', '=', $id)->delete();
        return redirect()->to("/pembayaran")->with("success", "Berhasil Menghapus Data");
    }
}
