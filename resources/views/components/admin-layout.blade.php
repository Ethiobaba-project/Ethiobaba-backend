<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <title>Ethiobaba | Find Your dream home & Cars</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet" />

    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" />
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body class="layout-fixed" style="height: auto">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- the three horizontal slash -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"> Logout </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar control-sidebar-dark">
            <div class="sidebar pt-3">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <h2>Ethiobaba</h2>
                </div>
                <!-- side bar menu -->
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link active">
                            <i class="fas fa-edit"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item menu-open ">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-tasks"></i>
                            <p>
                                Manage car
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/cars/create" class="nav-link bg-info">
                                    <p>Add car</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/cars/show" class="nav-link bg-info">
                                    <p>View cars</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-tasks"></i>
                            <p>
                                Manage House
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/houses/create" class="nav-link bg-info">
                                    <p>Add house</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/show" class="nav-link bg-info">
                                    <p>View house</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-edit"></i>
                            <p>Update Account</p>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    <x-flash-message />
        {{ $slot }}
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6./dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist//js//adminlte.min.js"></script>
    <!-- overlayScrollbars -->
    <script src=".//overlayScrollbars//js//jquery.overlayScrollbars.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <!-- bs-custome-file-input -->
    <script src="./bs-custom-file-input//bs-custom-file-input.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>
