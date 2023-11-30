<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;
use App\Models\TypeModel;
use Illuminate\Validation\Rules\File;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        $validate = $request->validate([
            'gambar' => ['required', File::image()->min(0)->max(2 * 512)->dimensions(Rule::dimensions()->maxWidth(1000)->maxHeight(500))],
            'nama_siswa' => 'required|max:50',
            'kelas' => 'required|max:20',
            'nis' => 'required|unique:siswa|max:10',
            'category_id' => 'required',
            'type_id' => 'required'
        ]);

        $input = new SiswaModel;
        $input->gambar = $request->gambar;
        $input->nama_siswa = $request->nama_siswa;
        $input->kelas = $request->kelas;
        $input->nis = $request->nis;
        $input->category_id = $request->category_id;
        $input->type_id = $request->type_id;
        $input->save();

        return redirect()->to('data-siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function show(SiswaModel $siswaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SiswaModel $siswaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiswaModel  $siswaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiswaModel $siswaModel)
    {
        //
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
