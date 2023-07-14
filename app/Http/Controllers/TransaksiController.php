<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.create',[
            'barang' => Barang::get(),
            'pelanggan' => Pelanggan::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create(
            [
                'transaksi_nama_barang' => $request->transaksi_nama_barang,
                'transaksi_nama_pelanggan' => $request->transaksi_nama_pelanggan,
                'transaksi_tanggal' => $request->transaksi_tanggal,
                'transaksi_jumlah_beli' => $request->transaksi_jumlah_beli,
                'transaksi_total' => $request->transaksi_total
            ]
        );

        return redirect('transaksi')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Transaksi::findOrFail($id);
        return view('transaksi.edit',[
                'barang' => Barang::get(),
                'pelanggan' => Pelanggan::get()
            ] , compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Transaksi::findOrFail($id);
        $row->update(
            [
                'transaksi_nama_barang' => $request->transaksi_nama_barang,
                'transaksi_nama_pelanggan' => $request->transaksi_nama_pelanggan,
                'transaksi_tanggal' => $request->transaksi_tanggal,
                'transaksi_jumlah_beli' => $request->transaksi_jumlah_beli,
                'transaksi_total' => $request->transaksi_total
            ]
        );
        return redirect('transaksi')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Transaksi::findOrFail($id);
        $row->delete();

        return redirect('transaksi')->with('success', 'Data berhasil dihapus');
    }
}