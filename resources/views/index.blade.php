@extends('layouts.main')

@section('container')

    @include('partials.navbar')

    {{-- Hero --}}
    <section class="jumbotron bg-info text-center vh-100 mt-4">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <img src="Image/Burung Only.png" alt="" style="width: 200px" />
            <p class="display-4 my-5" style="font-size: 52pt">
                The Next Level of Investment is Here!
            </p>
            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal" >Bergabung Sekarang</button>
            {{-- <a class="btn btn-primary btn-lg" href="#" role="button"
                >Bergabung Sekarang</a
            > --}}
        </div>
    </section>
    {{-- Close Hero --}}

    {{-- Body B --}}
    <section class="container-fluid" style="height: 948px">
        <div class="container-fluid" style="padding-top: 150px">
            <div class="row ps-5">
                <div class="col-7 ps-5">
                    <h1 class="text-start" style="font-size: 50px">Investasi yang menawarkan pengalaman unik dan menarik!</h1>
                </div>
                <div class="col"></div>
            </div>
            <div class="row mx-5 ps-5" style="margin-top: 100px">
                <div class="col ps-5" style="margin-right: 50px">
                    <div class="container" style="margin-left: -26px" >
                        <h2 style="font-size: 18pt"><strong>Registrasikan diri Anda.</strong></h2>
                        <br>
                        <p style="font-size: 16px">Peternak mitra kami akan merawat burung murai pilihan Anda dengan baik, dan Anda hanya perlu membayar biaya perawatan tiap bulannya yang akan digunakan untuk membeli semua kebutuhan burung murai Anda.</p>
                    </div>
                </div>
                <div class="col">
                    <h2 style="font-size: 18pt"><strong>Pilih yang menarik perhatian Anda.</strong></h2>
                    <br>
                    <p style="font-size: 16px">Setelah Anda nyaman, pastikan untuk memilih burung Murai yang sesuai dengan kriteria yang Anda miliki. Tak perlu khawatir, kami punya semua!</p>
                </div>
            </div>
            <div class="row mx-5 ps-5" style="margin-top: 100px">
                <div class="col ps-5">
                    <h2 style="font-size: 18pt"><strong>Buat diri Anda nyaman.</strong></h2>
                    <br>
                    <p style="font-size: 16px">Kami tidak mendorong Anda untuk segera berinvestasi. Buat diri Anda nyaman dengan mengulik semua informasi tentang kami, peternak mitra, dan burung murai yang akan diinvestasikan.</p></div>
                <div class="col" style="margin-left: 26px">
                    <h2 style="font-size: 18pt"><strong>Percayakan investasi Anda kepada Kami.</strong></h2>
                    <br>
                    <p style="font-size: 16px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita, labore nostrum. Debitis culpa doloribus consectetur rem, eum voluptas sed aperiam quasi unde doloremque numquam! Officiis adipisci ad quisquam ullam eos?</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Close Body B --}}



    {{-- Body E --}}
    <section class="container-fluid" style="height: 600px">
        <div class="container-fluid">
            <div class="row ps-5">
                <div class="col ps-5">
                    <h1 class="text-start" style="font-size: 50px">Kami memberikan pelayanan terbaik bagi Anda!</h1>
                </div>
                <div class="col"></div>
            </div>
            <div class="row mt-5 ps-5">
                <div class="col ps-5"></div>
                <div class="col">
                    <h2 style="font-size: 18pt"><strong>Anakan kualitas tinggi.</strong></h2>
                    <h2 style="font-size: 18pt"><strong>Perawatan intensif</strong></h2>
                    <h2 style="font-size: 18pt"><strong>Dilakukan oleh profesional</strong></h2>
                    <h2 style="font-size: 18pt"><strong>Harga sesuai</strong></h2>
                </div>
            </div>
        </div>
    </section>
    {{-- Close Body E --}}



    {{-- Body F1 --}}
    <section class="container-fluid" style="height: 600px">
            <div class="container-fluid">
                <div class="row ps-5">
                    <div class="col ps-5"></div>
                    <div class="col">
                        <h1 style="font-size: 50px">The next level of investment!</h1>
                    </div>
                </div>
                <div class="row ps-5">
                    <div class="col-5 mt-5 ps-5">
                        <h2 style="font-size: 18pt"><strong>Hanya perlu menanggung biaya perawatan.</strong></h2>
                        <br>
                        <p style="font-size: 16px">Peternak mitra kami akan merawat burung murai pilihan Anda dengan baik, dan Anda hanya perlu membayar biaya perawatan tiap bulannya yang akan digunakan untuk membeli semua kebutuhan burung murai Anda.</p>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
    </section>
    {{-- Close Body F1 --}}



    {{-- Body F2 --}}
    <section class="container-fluid mb-5" style="height: 600px">
        <div class="row ps-5">
            <div class="col ps-5">
                <h2 style="font-size: 18pt"><strong>Pekerjaan dilakukan oleh profesional.</strong></h2>
                <br>
                <p style="font-size: 16pt">Peternak mitra kami akan merawat burung murai pilihan Anda dengan baik, dan Anda hanya perlu membayar biaya perawatan tiap bulannya yang akan digunakan untuk membeli semua kebutuhan burung murai Anda.</p>
            </div>
            <div class="col"></div>
        </div>
        <br>
        <div class="row ps-5 pb-5 align-items-end">
            <div class="col ps-5" style="margin-bottom: -100px">
                <h2 style="font-size: 18pt"><strong>Harga jual akan sesuai harga pasaran.</strong></h2>
                <br>
                <p style="font-size: 16pt">Peternak mitra kami akan merawat burung murai pilihan Anda dengan baik, dan Anda hanya perlu membayar biaya perawatan tiap bulannya yang akan digunakan untuk membeli semua kebutuhan burung murai Anda.</p>
            </div>
            <div class="col text-center" style="margin-top: -50px">
                <img src="Image/dummy-pict.jpg" alt="Dummy Pict" style="width: 720px">
            </div>
        </div>
    </section>
    {{-- Close Body F2 --}}



    @include('partials.footer')

    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container text-center">
                        <h1 style="font-size: 36px">Silahkan memilih role Anda agar dapat mendaftar ke sistem kami.</h1>
                    </div>
                    <div class="container mt-5 text-center">
                        <a href="/regis-peternak"><button class="btn btn-outline-primary" style="width: 152px; margin-right: 30px">Peternak</button></a>
                        <a href="/regis-invest"><button class="btn btn-outline-primary" style="width: 152px">Investor</button></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
@endsection

@section('script')
    

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    >
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
    })

    </script>

@endsection

