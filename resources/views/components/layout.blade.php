<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com/2.2.19/tailwind.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>Ethiobaba | Find Your dream home & Cars</title>

    <!-- Bootstrap 4 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="">
  <nav class="top-0 left-0 right-0 flex justify-between items-center bg-gray-200 w-full">
    <a href="/" class="flex items-center relative">
        <img class="w-12  m-2" src="{{ asset('images/logo1.png') }}" alt="Logo" class="logo">
        <span class="mb-4 text-xl font-bold pt-4  pb-2">Ethiobaba</span>
    </a>
    <button id="toggleBtn" class=" pt-4 lg:hidden text-xl focus:outline-none pr-10">&#9776;</button>
    <ul id="menu" class="menu hidden lg:flex flex-wrap items-center space-x-6 mr-6 text-lg">
        <li>
            <a href="/" class="hover:text-laravel">Home</a>
        </li>
        <li class="dropdown">
            <a href="#" class="hover:text-laravel" data-toggle="dropdown">House</a>
            <ul class="dropdown-menu">
                <li><a href="/" class="dropdown-item">For Sale</a></li>
                <li><a href="/" class="dropdown-item">For Rent</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="hover:text-laravel" data-toggle="dropdown">Car</a>
            <ul class="dropdown-menu">
                <li><a href="/" class="dropdown-item">For Sale</a></li>
                <li><a href="/" class="dropdown-item">For Rent</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="hover:text-laravel">Books</a>
        </li>
        <li>
            <a href="#" class="hover:text-laravel">Contact Us</a>
        </li>
    </ul>
    <ul class="flex space-x-6 mr-6 text-sm">
        @auth
            <li>
                <span class="font-bold uppercase">
                  <i class="fa-solid fa-user"></i>
                    Welcome {{ auth()->user()->name }}
                </span>
            </li>
            <li>
                <form class="hover:text-laravel" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
        @endauth
    </ul>
</nav>

    <main>
        {{ $slot }}
    </main>

    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <script>
        const toggleBtn = document.getElementById('toggleBtn');
        const menu = document.getElementById('menu');

        toggleBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
    <x-flash-message-user />
</body>

</html>
