<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login MyCica</title>

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
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="container" id="Upper">
                <div class="container d-flex justify-content-center" id="Logo">
                    <img src="Image/Burung Only.png" alt="" style="width: 70px; height:70px">
                    <p style="font-size: 50px">MyCica</p>
                </div>
                <br>
                <h1 class="text-center">Silahkan masuk ke akun Anda.</h1>
                <br>
                <br>
            </div>
            <div class="container p-5" style="width: 50%; border: 1px solid black">
                <h2><strong>Login</strong></h2>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Username">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
                <br>
                <div class="container d-flex justify-content-center">
                    <p style="margin-top: 10px">Belum memiliki akun?  </p>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 140px; height: 40px; margin-left:10px">Daftar</button>
                </div>
            </div>
        </div>
    </div>

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
})</script>
</body>
</html>