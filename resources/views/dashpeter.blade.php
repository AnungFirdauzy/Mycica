@extends('layouts.main')

@section('container')

    @include('partials.navbardash')
    <div class="container-fluid vh-100 ">
        <section class="container position-absolute top-50 start-50 translate-middle">
            <div class="container border" style="padding: 100px 0px">
                <div class="container-flex text-center">
                    <h1>Selamat Datang, {{ $name }}</h1>
                    <small>Bagaimana kabar Anda Hari Ini ?</small>
                </div>
                <div class="row d-flex border mt-5 p-4 mx-auto" style="width: 600px">
                    <div class="col">
                        <div class="container-flex text-center mt-4">
                            <img src="Image/dummy-pict.jpg" alt="Profil Dummy" style="width: 200px">
                            <p>Peternak Murai <br> Jember, Jawa Timur</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container-flex text-center">
                            <h2><strong>{{ $name }}</strong></h2>
                            <p>Total investasi Anda kelola sampai saat <br> ini adalah</p>
                            <h3>0</h3>
                            <p><a href="">Lihat data Investor</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
@section('script')
@endsection