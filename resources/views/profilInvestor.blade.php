@extends('layouts.main')

@section('container')

    <section class="container vh-100">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="row">
                <div class="col">
                    <h2><i class="bi bi-arrow-left"></i></a> Profil Pengguna</h2>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="container border p-3">
                        <img src="/Image/user.png" alt="" style="width: 100px; margin:20px">
                        <div class="container p-1">
                            <a href="/profil/edit/investor/{{ $id }}"><button class="btn btn-outline-primary" style="width: 130px">Edit</button></a>
                            <a href=""><button class="btn btn-outline-primary m-1" style="width: 130px">Lengkapi Data</button></a>
                        </div>
                        <a href="/login"><button class="btn btn-outline-danger" style="width: 130px">Keluar</button></a>
                    </div>
                </div>
                <div class="col">
                    <div class="container">
                        <div class="container border p-5">
                            <h5><strong>Detail Profil</strong></h5>
                            <form class="container-flex" action="">

                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input class="form-control bg-light m-1" id="nama" type="text" value="{{ $nama }}" readonly>

                                <label for="nik" class="form-label">Nomor Induk Kependudukan</label>
                                <input class="form-control bg-light m-1" id="nik" type="text" value="{{ $nik }}" readonly>

                                <label for="age" class="form-label">Umur</label>
                                <input class="form-control bg-light m-1" id="age" type="text" value="{{ $age }}" readonly>

                                <label for="phone" class="form-label">No. Telp</label>
                                <input class="form-control bg-light m-1" id="phone" type="text" value="{{ $phone }}" readonly>

                                <label for="email" class="form-label">Email</label>
                                <input class="form-control bg-light m-1" id="email" type="text" value="{{ $email }}" readonly>

                                <label for="job" class="form-label">Pekerjaan</label>
                                <input class="form-control bg-light m-1" id="job" type="text" value="{{ $job }}" readonly>

                                <label for="reason" class="form-label">Alasan Berinvestasi</label>
                                <input class="form-control bg-light m-1" id="reason" type="text" value="{{ $reason }}" readonly>

                                <label for="income" class="form-label">Penghasilan Kotor</label>
                                <input class="form-control bg-light m-1" id="income" type="text" value="Rp. {{ $income }}" readonly>

                                <label for="netincome" class="form-label">Penghasilan Bersih</label>
                                <input class="form-control bg-light m-1" id="netincome" type="text" value="Rp. {{ $netincome }}" readonly>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



@endsection
@section('script')
@endsection