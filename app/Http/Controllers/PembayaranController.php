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
        if ($request->all() != null) {
            $data = DB::table('siswa')
                ->join('category', 'siswa.category_id', 'category.id')
                ->join('type', 'siswa.type_id', 'type.id')
                ->where('nama_siswa', 'like', '%' . $request->cari_siswa . '%')
                ->get();

            return response()->json([
                "message" => "success get with searching data!",
                "data" => $data,
                "success" => true
            ]);
        }
        return view('pembayaran.index');
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
        //
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
