<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MyCica</title>

        {{-- Bootstrap --}}
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />

        {{-- CSS --}}
        <link rel="stylesheet" href="css/lp-before-login.css" />

        {{-- Font --}}
            {{-- Montserrat --}}
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
            <div class="container">
                <a class="navbar-brand" href="#" style="text-decoration: none"
                    ><img
                        src="Image/Burung Only.png"
                        alt="Nav-Logo"
                        style="width: 20pt"
                    />MyCica</a
                >
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                style="color: #18a0fb"
                                >Investasi</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                style="color: #18a0fb"
                                >Katalog</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                style="color: #18a0fb"
                                >Investor</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                style="color: #18a0fb"
                                >Peternak</a
                            >
                        </li>
                    </ul>
                    <form class="container text-end">
                        <a href="/login"><button class="btn btn-outline-primary mx-2" type="button">
                            Masuk
                        </button></a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Daftar
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Close Navbar -->

        {{-- Hero --}}
        <section class="jumbotron bg-info text-center vh-100">
            <div class="container position-absolute top-50 start-50 translate-middle">
                <img src="Image/Burung Only.png" alt="" style="width: 200px" />
                <p class="display-4 my-5" style="font-size: 52pt">
                    The Next Level of Investment is Here!
                </p>
                <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Bergabung Sekarang</button>
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



        {{-- Footer --}}
            <section class="container-fluid pt-5" style="height: 400px">
                <div class="container-fluid pt-5">
                    <div class="container-fluid text-center pt-5">
                        <img
                        src="Image/Burung Only.png"
                        alt="Nav-Logo"
                        style="width: 20pt"
                        />
                        MyCica
                    </div>
                    <hr style="border: 1px solid black">
                    <div class="container-fluid text-center" style="margin-top:  50px">
                        <div style="margin-bottom: 50px">
                            <a href=""><img src="Image/Logo IG.png" alt="" style="width: 44px; margin-right: 30px"></a>
                            <a href=""><img src="Image/Logo FB.png" alt="" style="width: 44px; margin-right: 30px"></a>
                            <a href=""><img src="Image/Logo Telegram.png" alt="" style="width: 44px; margin-right: 30px"></a>
                            <a href=""><img src="Image/Logo Twitter.png" alt="" style="width: 44px"></a>
                        </div>
                        © MyCica. 2021.
                    </div>
                </div>
            </section>
        {{-- close footer --}}

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
    </body>
</html>
