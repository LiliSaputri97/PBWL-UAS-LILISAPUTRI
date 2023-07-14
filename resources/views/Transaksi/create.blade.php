@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA TRANSAKSI</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/transaksi')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA BARANG</label>
                        <select name="transaksi_nama_barang" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($barang as $brg)
                                <option value="{{$brg->barang_id}}">{{$brg->barang_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA PELANGGAN</label>
                        <select name="transaksi_nama_pelanggan" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($pelanggan as $plgn)
                                <option value="{{$plgn->pelanggan_id}}">{{$plgn->pelanggan_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">TANGGAL</label>
                        <input type="date" name="transaksi_tanggal" class="form-control" placeholder="Tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BELI</label>
                        <input type="text" name="transaksi_jumlah_beli" class="form-control" placeholder="Jumlah Beli">
                    </div>
                    <div class="mb-3">
                        <label for="">TOTAL</label>
                        <input type="text" name="transaksi_total" class="form-control" placeholder="Total">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection