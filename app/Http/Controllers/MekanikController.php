<?php

namespace App\Http\Controllers;

use App\Models\Mekanik;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = mekanik::get();
        return view('mekanik.tampilMekanik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('mekanik.tambahMekanik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Mekanik();
        $data->nm_mekanik = $request->nm_mekanik;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->no_hp = $request->no_hp;
        $post = $data->save();
        return redirect('mekanik');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = mekanik::where('id', '=', $id)->get();
        return view('mekanik.editMekanik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = mekanik::where('id', '=', $id);
        $data->update([
            'no_pol' => $request->nm_mekanik,
            'tahun_kendaraan' => $request->tgl_lahir,
            'no_mesin' => $request->alamat,
            'no_rangka' => $request->nik,
            'kapasitas_mesin' => $request->no_hp,
        ]);
        return redirect('mekanik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = mekanik::where('id', '=', $id);
        $data->delete();
        return redirect('mekanik');
    }
}