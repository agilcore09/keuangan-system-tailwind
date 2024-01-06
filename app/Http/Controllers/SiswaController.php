<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;
use App\Models\TypeModel;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        $data = SiswaModel::with(['Category', 'Type'])->get();

        if ($request->all() != null) {
            $data = DB::table('siswa')
                ->join('category', 'siswa.category_id', 'category.id')
                ->join('type', 'siswa.type_id', 'type.id')
                ->where('nama_siswa', 'like', '%' . $request->search . '%')
                ->get();

            return response()->json([
                "data" => $data,
                "message" => "berhasil tangkap",
                "success" => true
            ]);
        }
        return view('form.index', compact("data", "jurusan", "kelasSiswa"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        return view('form.siswa', compact("jurusan", "kelasSiswa"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'nama_siswa' => 'required|max:50',
            'kelas' => 'required|max:20',
            'nis' => 'required|unique:siswa|max:12',
            'nisn' => 'required|unique:siswa|max:12',
            'category_id' => 'required',
            'type_id' => 'required'
        ]);

        // check jika validasi gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // create Siswa

        $gambar = $request->file('gambar');
        $nama_file = time() . "_" . $gambar->getClientOriginalName();
        $tujuan = 'foto_siswa';
        $gambar->move($tujuan, $nama_file);

        $siswa = SiswaModel::create([
            "nama_siswa" => $request->nama_siswa,
            "gambar" => $nama_file,
            "kelas" => $request->kelas,
            "nis" => $request->nis,
            "nisn" => $request->nisn,
            "category_id" => $request->category_id,
            "type_id" => $request->type_id
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Simpan',
            'data' => $siswa
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaModel $siswaModel, $nis)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaModel $siswaModel, Request $request, $nis)
    {
        $data = $siswaModel->where('nis', '=', $nis)->first();
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        return view("form.update", compact("data", "jurusan", "kelasSiswa"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, SiswaModel $siswaModel, $nis)
    {
        // update data siswa
        $validated = $request->validate([
            'nama_siswa' => 'required|max:50',
            'kelas' => 'required|max:20',
            'nis' => 'required',
            'nisn' => 'required',
            'category_id' => 'required',
            'type_id' => 'required'
        ]);

        $data = $siswaModel::where('nis', $nis)->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id
        ]);
        return redirect()->to('/data-siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */

    public function destroy(SiswaModel $siswaModel, $nis)
    {
        $data = $siswaModel::where('nis', '=', $nis)->delete();
        Alert::success('Sukses', 'Berhasil Menghapus Data');
        return redirect()->to('/data-siswa')->with('success', 'Berhasil Menghapus Data');
    }

    public function ShowProfile(SiswaModel $siswa, $nis)
    {
        $nis = $nis;
        $data = DB::table('siswa')
            ->join('pembayaran', 'pembayaran.siswa_id', 'siswa.id')
            ->join('category', 'siswa.category_id', 'category.id')
            ->where('nis', '=', $nis)
            ->limit(5)
            ->get();
        return view('form.profile', compact("data", "nis"));
    }

    public function ShowTagihan(SiswaModel $siswa, $nis)
    {
        $data = DB::table('siswa')
            ->join('pembayaran', 'pembayaran.siswa_id', 'siswa.id')
            ->join('category', 'siswa.category_id', 'category.id')
            ->where('nis', '=', $nis)
            ->limit(5)
            ->get();

        $nama = DB::table('siswa')->where('nis', '=', $nis)->get();


        //  dd($nama);
        return view('form.tagihan', compact("data", "nama"));
    }
}
