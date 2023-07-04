<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <title>Ethiobaba | Find Your dream home & Cars</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <div class="w-25">
                <a class="navbar-brand" href="/">
                    <img class="img-fluid w-25" src="{{ asset('images/logo1.png') }}" alt="Logo" class="logo">
                    <span class="fw-bold">Ethiobaba</span>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">House</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/cars">All Houses</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="/houses">For Sale</a></li>
                            <li><a class="dropdown-item" href="/houses">For Rent</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Car</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/cars">All Cars</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="/cars">For Sale</a></li>
                            <li><a class="dropdown-item" href="/cars">For Rent</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#!">Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact Us</a></li>
                </ul>
                <ul class="navbar-nav ml-auto d-flex gap-3 ">
                    @auth
                        <li class="nav-item">
                            <span class="fw-bold text-uppercase">
                                <i class="bi bi-person"></i>
                                Welcome {{ auth()->user()->name }}
                            </span>
                        </li>
                        <li class="nav-item">
                            <form class="btn btn-outline-dark" method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="btn btn-link">
                                    <i class="bi bi-door-closed"></i> Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/register" class="btn btn-outline-dark">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="btn btn-outline-dark">
                                Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
     <x-flash-message-user />
</body>

</html>
