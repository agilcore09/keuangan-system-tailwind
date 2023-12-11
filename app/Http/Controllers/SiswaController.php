<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;
use App\Models\TypeModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        $data = SiswaModel::all();
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
            'nis' => 'required|unique:siswa|max:10',
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
        $data = $siswaModel->where('nis', '=', $nis)->first();
        $jurusan = CategoryModel::all();
        $kelasSiswa = TypeModel::all();
        return view("form.update", compact("data", "jurusan", "kelasSiswa"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaModel $siswaModel, Request $request, $nis)
    {
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
            'category_id' => 'required',
            'type_id' => 'required'
        ]);

        $data = $siswaModel::where('nis', $nis)->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'nis' => $request->nis,
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
    public function destroy(SiswaModel $siswaModel)
    {
        //
    }
}
