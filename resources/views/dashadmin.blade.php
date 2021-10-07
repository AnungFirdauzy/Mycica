@extends('layouts.main')

@section('container')

    @include('partials.navbaradmin')
    <div class="container-fluid vh-100 ">
        <section class="container position-absolute top-50 start-50 translate-middle">
            <div class="container border" style="padding: 100px 0px">
                <div class="container-flex text-center">
                    <h1>Selamat Datang, {{ $name }}</h1>
                    <small>Bagaimana kabar Anda Hari Ini ?</small>
                </div>
                <div class="container" style="width: 50%">
                    <div class="row pt-4 gx-5">
                        <div class="col mb-4">
                            <a href="" class="" style="text-decoration: none; color:black;"><div class="container border p-2 text-center">
                                <img src="/Image/Icon Investasi.png" alt="Icon Invest" style="width: 70px">
                                <p><strong>Investasi</strong></p>
                            </div></a>
                        </div>
                        <div class="col mb-4">
                            <a href="" class="" style="text-decoration: none; color:black"><div class="container border p-2 text-center">
                                <img src="/Image/Icon Catalog.png" alt="Icon Invest" style="width: 70px">
                                <p><strong>Katalog</strong></p>
                            </div></a>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col">
                            <a href="/data/investor/{{ $id }}" class="" style="text-decoration: none; color:black"><div class="container border p-2 text-center">
                                <img src="/Image/Icon Investor.png" alt="Icon Invest" style="width: 70px">
                                <p><strong>Investor</strong></p>
                            </div></a>
                        </div>
                        <div class="col">
                            <a href="/data/peternak/{{ $id }}" class="" style="text-decoration: none; color:black"><div class="container border p-2 text-center">
                                <img src="/Image/Icon Breeder.png" alt="Icon Invest" style="width: 70px">
                                <p><strong>Peternak</strong></p>
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
@section('script')
@endsection