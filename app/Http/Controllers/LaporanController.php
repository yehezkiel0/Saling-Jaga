<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layanan');
    }

    public function dashboard() {
        return view('riwayat', [
            'laporans' => Laporan::where('user_id', auth()->user()->id)->get()
        ]);
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
     * @param  \App\Http\Requests\StoreLaporanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pelapor' => 'required|max:255',
            'gender_pelapor' => 'required',
            'no_iden_pelapor' => 'required|max:255|',
            'prodi_pelapor' => 'required',
            'no_hp_pelapor' => 'required|max:255|',
            'email_pelapor' => 'required|max:255|',
            'nama_korban' => 'required|max:255|',
            'gender_korban' => 'required',
            'no_iden_korban' => 'required|max:255|',
            'prodi_korban' => 'required',
            'no_hp_korban' => 'required|max:255|',
            'email_korban' => 'required|max:255|',
            'perihal' => 'required',
            'lokasi_kejadian' => 'required',
            'deskripsi_kejadian' => 'required',
            'tgl_waktu_kejadian' => 'required',
            'image' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Laporan::create($validatedData);
        return redirect('/')->with('success', 'Input Laporan berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanRequest  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanRequest $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
