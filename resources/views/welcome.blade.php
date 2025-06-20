<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daniel Bara Seftino : 5026231169</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        xintegrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #212529;
        }

        .hero-header {
            padding: 4rem 2rem;
            margin-bottom: -2rem;
            background-image: linear-gradient(45deg, #6366f1, #a855f7);
            color: #ffffff;
            position: relative;
            z-index: 1;
        }

        .hero-header h1 {
            font-weight: 600;
            color: #ffffff;
        }

        .glass-navbar {
            background: rgba(255, 255, 255, 0.6);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            border-radius: 1.75rem;
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            margin: 0 2rem 2rem 2rem;
            position: relative;
            z-index: 2;
            padding: 0.5rem 0; /* Menambah padding vertikal untuk ruang saat wrap */
        }

        /* PERBAIKAN: Membuat navbar-nav menjadi responsif */
        .glass-navbar .navbar-nav {
            flex-wrap: wrap;
            justify-content: center;
        }

        .glass-navbar .nav-item {
            margin: 5px; /* Mengganti margin agar konsisten di semua sisi */
            border-radius: 1.25rem;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        .glass-navbar .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.5);
        }

        .glass-navbar .nav-link {
            color: #343a40;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            gap: 8px;
            /* Jarak antara ikon dan teks */
        }

        .glass-navbar .nav-item:hover .nav-link {
            color: #000000;
        }

        .content-container {
            padding: 2rem;
            min-height: 60vh;
            /* Memberi tinggi minimum agar footer tidak naik */
        }

        .content-panel {
            background-color: #ffffff;
            border-radius: 1.25rem;
            padding: 2rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        }

        .search-form {
            display: flex;
            gap: 10px;
            max-width: 400px;
        }

        .search-form .form-control {
            border-radius: 0.75rem;
        }

        .search-form .btn {
            border-radius: 0.75rem;
            background-color: #6366f1;
            border-color: #6366f1;
            color: white;
        }

        .table thead th {
            border: none;
            color: #6c757d;
            font-weight: 600;
        }

        .table tbody tr {
            transition: background-color 0.2s ease;
        }

        .table tbody tr:hover {
            background-color: #f1f3f5;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .status-badge {
            padding: 0.3em 0.75em;
            border-radius: 50rem;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-tersedia {
            background-color: #d1fae5;
            color: #065f46;
        }

        .status-habis {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .btn-primary {
            border-radius: 0.75rem;
            background-color: #6366f1;
            border: none;
        }

        .btn-success {
            border-radius: 0.5rem;
        }

        .btn-danger {
            border-radius: 0.5rem;
        }

        .pagination {
            justify-content: center;
        }

        .pagination .page-item .page-link {
            border-radius: 0.5rem;
            margin: 0 3px;
            border: none;
            color: #6366f1;
        }

        .pagination .page-item.active .page-link {
            background-color: #6366f1;
            color: white;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }

        .pagination .page-item.disabled .page-link {
            color: #adb5bd;
        }

        .form-control,
        .form-select {
            border-radius: 0.75rem;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #a855f7;
            box-shadow: 0 0 0 0.25rem rgba(168, 85, 247, 0.25);
        }

        .btn-secondary {
            border-radius: 0.75rem;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        /* Style untuk Footer Baru */
        .site-footer {
            background-color: #343a40;
            color: #f8f9fa;
            padding: 40px 0;
            margin-top: 40px;
        }

        .site-footer h5 {
            color: #ffffff;
            font-weight: 600;
        }

        .site-footer p,
        .site-footer a {
            color: #ced4da;
            font-size: 0.9rem;
        }

        .site-footer a:hover {
            color: #a855f7;
            text-decoration: none;
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: #495057;
            border-radius: 50%;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .social-icons a:hover {
            background-color: #6366f1;
        }

        .social-icons i {
            color: #ffffff;
        }

        .copyright-text {
            border-top: 1px solid #495057;
            padding-top: 20px;
            margin-top: 20px;
            font-size: 0.8rem;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <div class="jumbotron text-center hero-header">
        <h1>5026231169 : Daniel Bara Seftino</h1>
    </div>

    <nav class="navbar navbar-expand-sm justify-content-center glass-navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/chat"><i class="fas fa-th-large"></i>Chat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/mahasiswa"><i class="fas fa-th-large"></i>Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/combo"><i class="fas fa-th-large"></i>Kategori</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-th-large"></i>Karyawan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/counter"><i class="fas fa-th-large"></i>Counter</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="content-container">
            @yield('content')
        </div>
    </div>

    <!-- Footer Baru -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5>Tentang Saya</h5>
                    <p>
                        Daniel Bara Seftino - 5026231169 <br>
                        I’m a hard working persistent person who’s interested in expanding relation and adding working
                        experience. Based on my character, I’m good at working in a team and solving problems together.
                    </p>
                </div>
                <div class="col-md-4 text-md-right">
                    <h5>Hubungi Saya</h5>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/danielbara._/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/danielbaraseft/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com/Danielbarz/" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center copyright-text">
                    <p>&copy; 2025 Daniel Bara Seftino. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
