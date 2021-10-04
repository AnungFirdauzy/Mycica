@extends('layouts.main')

@section('container')
    <div class="container-fluid vh-100">
        <div class="container">
            <div class="container" id="Upper">
                <div class="container d-flex justify-content-center" id="Logo">
                    <img src="Image/Burung Only.png" alt="" style="width: 70px; height:70px">
                    <p style="font-size: 50px">MyCica</p>
                </div>
                <br>
                <h1 class="text-center">Silahkan daftarkan diri Anda agar dapat menjadi mitra kami.</h1>
                <br>
                <br>
            </div>
            <div class="container p-5" style="width: 50%; border: 1px solid black">
                <h2><strong>Register</strong></h2>
                <form action="/regis-peternak" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" placeholder="Nama perusahaan/peternakan" value="{{ old('company') }}">
                    @error('company')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="ownerName" class="form-control @error('ownerName') is-invalid @enderror" placeholder="Nama Pemilik" value="{{ old('ownerName') }}">
                    @error('ownerName')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="Nomor Induk Kependudukan (NIK)" value="{{ old('nik') }}">
                    @error('nik')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="npwp" class="form-control @error('npwp') is-invalid @enderror" placeholder="NPWP" value="{{ old('npwp') }}">
                    @error('npwp')
                        {{ $message }}
                    @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Nomor Telepon" aria-label="Nomor Telepon" aria-describedby="basic-addon1" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" name="pass" class="form-control @error('pass') is-invalid @enderror" placeholder="Password" value="{{ old('pass') }}">
                    @error('pass')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>  

                    <div class="mb-3">
                        <input type="password" name="repass" class="form-control @error('repass') is-invalid @enderror" placeholder="Konfirmasi Password" value="{{ old('repass') }}">
                    @error('repass')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>  



                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
@endsection



@section('script')
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"
></script>
@endsection