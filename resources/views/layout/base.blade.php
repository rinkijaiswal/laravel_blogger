<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Burger Point</title>
        <link rel="icon" type="image/x-icon" href="/hi.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Rubik&display=swap" rel="stylesheet">
        <style>
            a:hover{
                border-bottom: 2px solid red;
            }
        </style>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
  <body>
      <!-- header -->
    <header class="p-3 text-white" style="background-color:#1a237e;">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <span class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="/hi.png" class="bi me-2" width="60" height="50" />
            </span>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" style="font-family: 'Rubik', sans-serif;" class="nav-link px-2 text-white">Home</a></li>
            <li><a href="/orderonline" style="font-family: 'Rubik', sans-serif;" class="nav-link px-2 text-white">Order Online</a></li>
            <li><a href="/ordermenu" style="font-family: 'Rubik', sans-serif;" class="nav-link px-2 text-white">Menu</a></li>
            <li><a href="/contact" style="font-family: 'Rubik', sans-serif;" class="nav-link px-2 text-white">Contact</a></li>
            </ul>
        </div>
        </div>
    </header>
    @yield('content')

    <!-- footer -->
    <!-- <div class="container-fluid border-top" style="background-color: #1a237e;">
        <div class="container">
            <footer class="pt-5">
                <div class="row">
                <div class="col-6 col-md-2 mb-3 d-flex justify-content-center align-items-center">
                    <ul class="nav flex-column">
                    <h3 class="text-white">Section</h3>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Order Online</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Menu</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3 d-flex justify-content-center align-items-center">
                    <ul class="nav flex-column">
                    <h3 class="text-white">Section</h3>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Terms & Conditions</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                    <li class="nav-item mb-2"><a href="/contact" class="nav-link p-0 text-white">Contact</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3 d-flex justify-content-center align-items-center">
                    <ul class="nav flex-column">
                    <h3 class="text-white">Section</h3>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Privacy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Sitemap</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                    <h5 class="text-white">Subscribe to our newsletter</h5>
                    <p class="text-white">Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                    </form>
                </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
                <p class="text-white">&copy; 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><i class="fa-brands fa-facebook fa-2x" style="color:white"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><i class="fa-brands fa-instagram fa-2x" style="color:white"></i></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><i class="fa-brands fa-twitter fa-2x" style="color:white"></i></a></li>
                </ul>
                </div>
            </footer>
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
