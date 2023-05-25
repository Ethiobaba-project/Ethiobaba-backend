<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{asset('images/favicon.ico')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css"> --}}
    <title>Ethiobaba | Find Your dream home & Cars</title>
</head>

<body class="">
    <nav class="top-0 left-0 right-0 flex justify-between items-center bg-gray-200 z-20">
        <a href="/" class="flex items-center relative">
          <img class="w-12 ml-4 mt-4" src="{{asset('images/logo1.png') }}"alt="Logo" class="logo">
          <span class="text-xl font-bold mt-2 ml-4">Ethiobaba</span>
        </a>
        <button id="toggleBtn" class="lg:hidden text-xl focus:outline-none  pr-10">&#9776;</button>
        <ul id="menu" class="menu hidden lg:flex flex-wrap items-center space-x-6 mr-6 text-lg">
          <li>
            <a href="index.html" class="hover:text-laravel">
              Home
            </a>
          </li>
          <li>
            <a href="house-for-sell.html" class="hover:text-laravel">
              House for Sell
            </a>
          </li>
          <li>
            <a href="car-for-sell.html" class="hover:text-laravel">
              Car for Sell
            </a>
          </li>
          <li>
            <a href="house-for-rent.html" class="hover:text-laravel">
              House for Rent
            </a>
          </li>
          <li>
            <a href="car-for-rent.html" class="hover:text-laravel">
              Car for Rent
            </a>
          </li>
          <li>
            <a href="c-to-c-delivery.html" class="hover:text-laravel">
              C to C Delivery
            </a>
          </li>
          <li>
            <a href="books.html" class="hover:text-laravel">
              Books
            </a>
          </li>
          <li>
            <a href="contact-us.html" class="hover:text-laravel">
              Contact Us
            </a>
          </li>
          <li>
            <a href="register.html" class="hover:text-laravel">
              <i class="fa-solid fa-user-plus"></i> Register
            </a>
          </li>
          <li>
            <a href="login.html" class="hover:text-laravel">
              <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
            </a>
          </li>
        </ul>
      </nav>
    <main>
        {{$slot}}
    </main>

    {{-- <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-10 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>
    </footer> --}}
    <script>
        const toggleBtn = document.getElementById('toggleBtn');
        const menu = document.getElementById('menu');

        toggleBtn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
