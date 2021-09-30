<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mendaftar Investor MyCica</title>

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
    <div class="container-fluid vh-100">
        <div class="container">
            <div class="container" id="Upper">
                <div class="container d-flex justify-content-center" id="Logo">
                    <img src="Image/Burung Only.png" alt="" style="width: 70px; height:70px">
                    <p style="font-size: 50px">MyCica</p>
                </div>
                <br>
                <h1 class="text-center">Silahkan daftarkan diri Anda agar dapat berinvestasi dengan kami.</h1>
                <br>
                <br>
            </div>
            <div class="container p-5" style="width: 50%; border: 1px solid black">
                <h2><strong>Register</strong></h2>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nama Lengkap">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nomor Induk Kependudukan (NIK)">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Umur">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input type="text" class="form-control" placeholder="Nomor Telepom" aria-label="Nomor Telepom" aria-describedby="basic-addon1">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="email">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="pekerjaan">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Alasan berinvestasi">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Pendapatan kotor">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Pendapatan bersih">
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Konfirmasi Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>





<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"
></script>
</body>
</html>