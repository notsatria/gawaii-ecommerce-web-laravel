    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="icon" type="image/png" href="img/logo gawaii.png" />
        {{-- font awesome cdn --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>@yield('title', 'Online Store')</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex justify-content-between align-items-center"
                    href="{{ route('home.index') }}"><img src="img/logo gawaii.png" alt="" class="mx-3"
                        style="max-width: 24px"><span class="text-uppercase fw-lighter">Gawaii</span></a>
                <div class="order-lg-2 nav-btns d-flex">
                    <a class="btn position-relative px-0 border-0" href="{{ route('cart.index') }}">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="position absolute top-0 translate-middle badge rounded-pill bg-primary">3</span>
                    </a>
                    <a class="btn position-relative px-0 border-0">
                        <i class="fa fa-heart"></i>
                        <span class="position absolute top-0 translate-middle badge rounded-pill bg-primary">1</span>
                    </a>
                    @guest
                        <a class="nav-link active text-dark" href="{{ route('login') }}">Login</a>
                        <a class="nav-link active text-dark border-0 me-0" href="{{ route('register') }}">Register</a>
                    @else
                        <a class="nav-link active text-dark" href="{{ route('myaccount.orders') }}">My Orders</a>

                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active text-dark"
                                onclick="document.getElementById('logout').submit();">Logout</a>
                            @csrf
                        </form>
                    @endguest


                </div>

                <button class="navbar-toggler border-0" type="button" data-bs-target="#navMenu"
                    data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon">
                    </span></button>

                <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item"> <a href="{{ route('home.index') }}"
                                class="nav-link px-3 py-3 text-uppercase text-dark">Home</a></li>
                        <li class="nav-item"> <a href="#recommendation"
                                class="nav-link px-3 py-3 text-uppercase text-dark">Recommendations</a></li>
                        <li class="nav-item"> <a href="{{ route('product.index') }}"
                                class="nav-link px-3 py-3 text-uppercase text-dark">Collection</a></li>
                        <li class="nav-item border-0"> <a href="{{ route('home.about') }}"
                                class="nav-link px-3 py-3 text-uppercase text-dark">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="">
            @yield('content')
        </div>
        <!-- footer -->
        <footer class="bg-dark py-5">
            <div class="container">
                <div class="row text-white g-4">
                    <div class="col-md-6 col-lg-3">
                        <a href="{{ route('home.index') }}"
                            class="text-uppercase text-decoration-none brand text-white fs-1">Gawaii</a>
                        <p class="text-white text-muted mt-3">Gawaii dikenal sebagai perusahaan yang fokus pada kualitas
                            dan
                            keunggulan produk. Mereka menawarkan berbagai produk Apple, mulai dari iPhone, iPad,
                            MacBook, hingga perangkat wearable seperti Apple
                            Watch. Setiap produk yang dijual oleh Gawaii merupakan produk terbaru dengan fitur-fitur
                            canggih
                            dan desain yang elegan.</p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-light">Links</h5>
                        <ul class="list-unstyled">
                            <li class="my-3">
                                <a href="{{ route('home.index') }}"
                                    class="text-white text-decoration-none text-muted"><i
                                        class="fas fa-chevron-right me-1"></i>Home</a>
                            </li>
                            <li class="my-3">
                                <a href="#recommendation" class="text-white text-decoration-none text-muted"><i
                                        class="fas fa-chevron-right me-1"></i>Recommendations</a>
                            </li>
                            <li class="my-3">
                                <a href="{{ route('product.index') }}"
                                    class="text-white text-decoration-none text-muted"><i
                                        class="fas fa-chevron-right me-1"></i>Collection</a>
                            </li>
                            <li class="my-3">
                                <a href="{{ route('home.about') }}"
                                    class="text-white text-decoration-none text-muted"><i
                                        class="fas fa-chevron-right me-1"></i>About</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-light mb-3">
                            Contact Us
                        </h5>
                        <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                            <span class="me-3">
                                <i class="fas fa-map-marked-alt"></i>
                            </span>
                            <span class="fw-light">Jalan Prof Sudarto, Tembalang, Semarang, Indonesia</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                            <span class="me-3">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span class="fw-light">gawaii.support@email.com</span>
                        </div>
                        <div class="d-flex justify-content-start align-items-start my-2 text-muted">
                            <span class="me-3">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <span class="fw-light">+62 32847 823823</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-light mb-3">Follow Us</h5>
                        <div class="d-flex">
                            <ul class="list-unstyled d-flex">
                                <li>
                                    <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="text-white text-decoration-none text-muted fs-4 me-4"><i
                                            class="fab fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
    </body>

    </html>
