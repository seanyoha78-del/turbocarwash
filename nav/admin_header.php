<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Astro v5.9.2">
    <title>Turbo Wash Express</title>
    <link href="../img/logo.png" rel="icon">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <script src="../assets/js/color-modes.js"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#712cf9">
    <link href="sidebars.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/dist/css/header.css">

    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: #0000001a;
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em #0000001a, inset 0 .125em .5em #00000026
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8
        }

        .bd-mode-toggle {
            z-index: 1500
        }

        .bd-mode-toggle .bi {
            width: 1em;
            height: 1em
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important
        }

        body {
            background-color: white;
        }

        .animated-gradient-2 {
            border-radius: 20px;
            width: 1600px;
            height: 200px;
            background: linear-gradient(to right, #3498db, #9b59b6, #e74c3c, #34495e);
            background-size: 400% 400%;
            animation: gradientAnimation2 10s ease infinite;
        }

        @keyframes gradientAnimation2 {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .text {
            color: white;
            font-size: 50px;
            font-style: italic;
            text-align: center;
        }
    </style>
    <script src="../assets/dist/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>

</head>

<body>

    <div class="row">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar" style="width: 320px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32" aria-hidden="true">
                    <use xlink:href="#bootstrap"></use>
                    <img src="../img/logo.png" alt="Profile" width="40" height="40" class="me-2">
                </svg> <span class="fs-4">Turbo Wash Express</span> </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item"> <a href="../admin/dashboard.php" class="nav-link active" aria-current="page"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                            <use xlink:href=""></use>
                        </svg>
                        Dashboard
                    </a> </li>
                <li>
                    <div class="dropdown" style="margin-left: 15%;">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>Washing Points</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="../admin/add.php">Add</a></li>
                            <li><a class="dropdown-item" href="../admin/carwash_points.php">Manage</a></li>
                    </div>
                </li>
                <li> <a href="../admin/add_carwashbooking.php" class="nav-link text-white"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                            <use xlink:href="#table"></use>
                        </svg>
                        Add Carwash Booking
                    </a> </li>
                <li>
                    <div class="dropdown" style="margin-left: 15%;">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>Carwash Booking</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="../admin/new_booking.php">New</a></li>
                            <li><a class="dropdown-item" href="../admin/complete_booking.php">Completed</a></li>
                            <li><a class="dropdown-item" href="../admin/Bookings.php">All</a></li>
                    </div>
                </li>
                <li> <a href="../admin/enquiries.php" class="nav-link text-white"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Manage Enquires
                    </a> </li>
                <li>
                    <div class="dropdown" style="margin-left: 15%;">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>Carwash Booking</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="../admin/update.php">About</a></li>
                            <li><a class="dropdown-item" href="../admin/contact.php">Contact</a></li>
                    </div>
                </li>
            </ul>
            <hr>

            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../img/profile.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Admin</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal">Settings</button>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="../login/admin_login.php">Sign out</a></li>
                </ul>
            </div>
        </div>