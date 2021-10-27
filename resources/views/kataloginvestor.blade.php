@extends('layouts.main')

@include('partials.navbarinvestor')

    @section('container')
    
        <section class="container pt-5">
            <div class="container text-center mt-5">
                <h1>Daftar Katalog Anda</h1>
                <small>Klick burung untuk melihat detail</small>
            </div>

            <div class="container">
                <div class="row row-cols-3 mt-5">
                    @foreach ($burung as $item)
                        <a href="" style="text-decoration: none; color: black"><div class="card me-auto shadow-sm" style="width: 25rem;">
                            <img src="{{ URL::asset("Image/dummy-pict.jpg") }}" class="card-img-top img-thumbnail" alt="Foto Burung" style="max-width: 400px">
                            <div class="card-body">
                                <h4 class="card-title">{{ $item->nama_burung }}</h4>
                                <div class="container">
                                    <div class="row" style="margin-top: -5px">
                                        <div class="col"><p>Tanggal Menetas </p></div>
                                        <div class="col">: {{ $item->tanggal_menetas }}</div>
                                    </div>
                                    <div class="row" style="margin-top: -5px">
                                        <div class="col"><p>Jenis Kelamin </p></div>
                                        <div class="col">: {{ $item->jenis_kelamin }}</div>
                                    </div>
                                    <div class="row" style="margin-top: -5px">
                                        <div class="col"><p>Berat Burung </p></div>
                                        <div class="col">: {{ $item->berat }}</div>
                                    </div>
                                    <div class="row" style="margin-top: -5px">
                                        <div class="col"><p>Riwayat Medis </p></div>
                                        <div class="col">: {{ $item->riwayat_medis }}</div>
                                    </div>
                                    <div class="row" style="margin-top: -5px">
                                        <div class="col"><p>Batas Investasi </p></div>
                                        <div class="col">: {{ $item->tanggal_max_investasi }}</div>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                    @endforeach
                </div>
            </div>
        </section>
    @endsection

    @section('script')
    @endsection