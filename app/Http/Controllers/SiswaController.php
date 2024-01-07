<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\PembayaranModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;
use App\Models\TypeModel;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

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

        // menambahkan nilai pengecekan untuk total pembayaran siswa selama 3 tahun sekolah
        $tagihan = PembayaranModel::join('siswa', 'siswa.id', 'pembayaran.siswa_id')
            ->where('siswa.nis', '=', $nis)->get();

        $tagihan = $tagihan->toArray();

        // nilai fix dari pembayaran selama 3 tahun
        $fpembangunan = 1000000;
        $ftunggakan = 1000000;
        $fspp = 4320000;
        $flab = 720000;
        $fosis = 720000;
        $fsemester_ganjil = 360000;
        $fsemester_genap = 360000;
        $fpsg = 1000000;
        $fuas = 1000000;
        $falumni = 1000000;



        // penampungan nilai masing masing
        $pembangunan = [];
        $tunggakan = [];
        $spp = [];
        $lab = [];
        $osis = [];
        $semester_ganjil = [];
        $semester_genap = [];
        $psg = [];
        $uas = [];
        $alumni = [];

        foreach ($tagihan as $money) {
            $tunggakan[] += $money["tunggakan"];
            $pembangunan[] += $money["pembangunan"];
            $spp[] += $money["spp"];
            $lab[] += $money["lab"];
            $osis[] += $money["osis"];
            $semester_ganjil[] += $money["semester_ganjil"];
            $semester_genap[] += $money["semester_genap"];
            $psg[] += $money["psg"];
            $uas[] += $money["uas"];
            $alumni[] += $money["alumni"];
        }

        // kalkulasi dari nilai fix perhitungan - data dalam array database 
        $totalPembangunan = $fpembangunan - collect($pembangunan)->sum();
        $totalTunggakan = $ftunggakan - collect($tunggakan)->sum();
        $totalSpp = $fspp - collect($spp)->sum();
        $totalLab = $flab - collect($lab)->sum();
        $totalOsis = $fosis - collect($osis)->sum();
        $totalSemesterGanjil = $fsemester_ganjil - collect($semester_ganjil)->sum();
        $totalSemesterGenap = $fsemester_genap - collect($semester_genap)->sum();
        $totalPsg = $fpsg - collect($psg)->sum();
        $totalUas = $fuas - collect($uas)->sum();
        $totalAlumni = $falumni - collect($alumni)->sum();

        $totalAll = collect($totalPembangunan, $totalTunggakan, $totalSpp, $totalLab, $totalOsis, $totalSemesterGanjil, $totalSemesterGenap, $totalPsg, $totalPsg, $totalAlumni)->sum();

        return view(
            'form.tagihan',
            compact(
                "data",
                "nama",
                "totalPembangunan",
                "totalTunggakan",
                "totalSpp",
                "totalLab",
                "totalOsis",
                "totalSemesterGanjil",
                "totalSemesterGenap",
                "totalPsg",
                "totalUas",
                "totalAlumni",
                "totalAll"
            )
        );
    }

    public function nota(SiswaModel $siswa, $nis)
    {

        $data = DB::table('siswa')
            ->join('pembayaran', 'pembayaran.siswa_id', 'siswa.id')
            ->join('category', 'siswa.category_id', 'category.id')
            ->where('nis', '=', $nis)
            ->limit(5)
            ->get();

        $nama = DB::table('siswa')->where('nis', '=', $nis)->get();

        // menambahkan nilai pengecekan untuk total pembayaran siswa selama 3 tahun sekolah
        $tagihan = PembayaranModel::join('siswa', 'siswa.id', 'pembayaran.siswa_id')
            ->where('siswa.nis', '=', $nis)->get();

        $tagihan = $tagihan->toArray();

        // nilai fix dari pembayaran selama 3 tahun
        $fpembangunan = 1000000;
        $ftunggakan = 1000000;
        $fspp = 4320000;
        $flab = 720000;
        $fosis = 720000;
        $fsemester_ganjil = 360000;
        $fsemester_genap = 360000;
        $fpsg = 1000000;
        $fuas = 1000000;
        $falumni = 1000000;



        // penampungan nilai masing masing
        $pembangunan = [];
        $tunggakan = [];
        $spp = [];
        $lab = [];
        $osis = [];
        $semester_ganjil = [];
        $semester_genap = [];
        $psg = [];
        $uas = [];
        $alumni = [];

        foreach ($tagihan as $money) {
            $tunggakan[] += $money["tunggakan"];
            $pembangunan[] += $money["pembangunan"];
            $spp[] += $money["spp"];
            $lab[] += $money["lab"];
            $osis[] += $money["osis"];
            $semester_ganjil[] += $money["semester_ganjil"];
            $semester_genap[] += $money["semester_genap"];
            $psg[] += $money["psg"];
            $uas[] += $money["uas"];
            $alumni[] += $money["alumni"];
        }

        // kalkulasi dari nilai fix perhitungan - data dalam array database 
        $totalPembangunan = $fpembangunan - collect($pembangunan)->sum();
        $totalTunggakan = $ftunggakan - collect($tunggakan)->sum();
        $totalSpp = $fspp - collect($spp)->sum();
        $totalLab = $flab - collect($lab)->sum();
        $totalOsis = $fosis - collect($osis)->sum();
        $totalSemesterGanjil = $fsemester_ganjil - collect($semester_ganjil)->sum();
        $totalSemesterGenap = $fsemester_genap - collect($semester_genap)->sum();
        $totalPsg = $fpsg - collect($psg)->sum();
        $totalUas = $fuas - collect($uas)->sum();
        $totalAlumni = $falumni - collect($alumni)->sum();

        $totalAll = collect($totalPembangunan, $totalTunggakan, $totalSpp, $totalLab, $totalOsis, $totalSemesterGanjil, $totalSemesterGenap, $totalPsg, $totalPsg, $totalAlumni)->sum();

        $pdf =  Pdf::loadView(
            "pembayaran.nota",
            [
                "nama" => $nama,
                "totalPembangunan" => $totalPembangunan,
                "totalSpp" => $totalSpp,
                "totalLab" => $totalLab,
                "totalOsis" => $totalOsis,
                "totalSemesterGanjil" => $totalSemesterGanjil,
                "totalSemesterGenap" => $totalSemesterGenap,
                "totalPsg" => $totalPsg,
                "totalUas" => $totalUas,
                "totalAlumni" => $totalAlumni,
                "totalAll" => $totalAll

            ]
        );

        return $pdf->download('invoice.pdf');
    }
}
