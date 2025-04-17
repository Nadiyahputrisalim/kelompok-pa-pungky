<?php

namespace App\Http\Controllers;

use App\Models\detail_service;
use Illuminate\Http\Request;

class DetailServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = detail_service::get();
        return view('detailService.tampilDetailService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('detailService.tambahDetailService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new detail_service();
        $data->sparepart = $request->sparepart;
        $data->harga = $request->harga;
        $post = $data->save();
        return redirect('detailservice');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = detail_service::where('id', '=', $id)->get();
        return view('detailService.editDetailService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = detail_service::where('id', '=', $id);
        $data->update([
            'sparepart' => $request->sparepart,
            'harga' => $request->harga,
        ]);
        return redirect('detailservice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = detail_service::where('id', '=', $id);
        $data->delete();
        return redirect('detailservice');
    }
}