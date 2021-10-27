@extends('layouts.main')

@section('container')
    <div class="container-fluid vh-100">

        @if(session()->has('gagal'))
        <div class="alert alert-danger alert-dismissible fade show mt-3 text-center" role="alert">
            {{ session('gagal') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="container">
            <div class="container" id="Upper">
                <div class="container d-flex justify-content-center" id="Logo">
                    <img src="{{ URL::asset("Image/Burung Only.png") }}" alt="" style="width: 70px; height:70px">
                    <p style="font-size: 50px">MyCica</p>
                </div>
                <br>
                <h1 class="text-center">Perbarui data Burung.</h1>
                <br>
                <br>
            </div>
            <div class="container p-5" style="width: 50%; border: 1px solid black">
                <h2><strong>Data Burung</strong></h2>
                <form action="/edit-burung/{{ $id }}" method="POST">
                    @csrf
                    @foreach ($data_burung as $item)
                        <div class="mb-3">
                            <label for="nama_burung">Nama Burung</label>
                            <input type="text" id="nama_burung" name="nama_burung" class="form-control @error('nama_burung') is-invalid @enderror" placeholder="Nama Burung" value="{{ $item->nama_burung }}">
                        @error('nama_burung')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <input type="hidden" name="id_peternak" class="form-control" value="{{ $id }}">
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_menetas">Tanggal Menetas</label>
                            <input type="date" id="tanggal_menetas" name="tanggal_menetas" class="form-control @error('tanggal_menetas') is-invalid @enderror" placeholder="Nama Pemilik" value="{{ $item->tanggal_menetas }}">
                        </div>

                        <div class="mb-3">
                            <input type="hidden" name="tanggal_max_investasi" value="{{ $date }}">
                        </div>

                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-select mb-3" id="jenis_kelamin" name="jenis_kelamin" aria-label=".form-select-sm example">
                            <option value="Pejantan">Jantan</option>
                            <option value="Betina">Betina</option>
                        </select>

                        <label for="berat">Berat</label>
                        <div class="input-group mb-3">
                            <input id="berat" type="text" name="berat" class="form-control @error('berat') is-invalid @enderror" placeholder="Berat" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ $item->berat }}">
                            <span class="input-group-text" id="basic-addon2">gram</span>
                        @error('berat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>

                        <label for="riwayat">Riwayat Medis</label>
                        <div class="mb-3">
                            <textarea id="riwyat" class="form-control" name="riwayat_medis" aria-label="With textarea" placeholder="Riwayat Medis"></textarea>
                        @error('riwayat_medis')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Tambahkan Gambar</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <label for="status">Status Burung :</label>
                        <select id="status" name="status" class="form-select" aria-label="Default select example">
                            <option value="tersedia">Tersedia</option>
                            <option value="tidak tersedia">Tidak tersedia</option>
                        </select>
                    @endforeach


                    <div class="container mt-3">
                        <button type="button" class="btn btn-outline-primary" style="width: 80px">Batal</button>
                        <button type="submit" class="btn btn-primary" style="width: 80px">Simpan</button>
                    </div>
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