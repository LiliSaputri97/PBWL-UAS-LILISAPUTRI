@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA PELANGGAN</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/pelanggan/' .$row->pelanggan_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA PELANGGAN</label>
                        <input type="text" name="pelanggan_nama" class="form-control" value="{{$row->pelanggan_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">ALAMAT</label>
                        <input type="text" name="pelanggan_alamat" class="form-control" value="{{$row->pelanggan_alamat}}">
                    </div>
                    <div class="mb-3">
                        <label for="">NO TELEPON</label>
                        <input type="text" name="pelanggan_no_tlpn" class="form-control" value="{{$row->pelanggan_no_tlpn}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection