<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil | Dashboard User</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            align-items: stretch;
            min-height: 100vh;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #487baa;
            color: #fff;
            transition: all 0.3s;
            overflow-y: auto;
        }

        #sidebar .p-4 {
            padding: 20px;
        }

        #sidebar .img.logo img {
    display: block;
    max-width: 100%;
    height: auto;
    margin: 0 auto;
}


        #sidebar ul.components {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        #sidebar ul li {
            padding: 10px;
            font-size: 16px;
        }

        #sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            transition: background 0.3s, color 0.3s;
        }

        #sidebar ul li a:hover {
            background: #6c8ebf;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            background: #6c8ebf;
        }

        #content {
            padding: 20px;
            transition: all 0.3s;
            width: calc(100% - 250px);
            overflow-y: auto;
            /* Enable vertical scrolling for content */
            height: 100vh;
            /* Full height */
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar .btn {
            background-color: #487baa;
            color: #fff;
            border: none;
        }

        .navbar .btn:hover {
            background-color: #6c8ebf;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            font-size: 14px;
            /* Ukuran font pada input search */
        }

        .btn-lg {
            font-size: 14px;
            /* Ukuran font pada tombol */
        }

        .box p {
            font-size: 12px;
            /* Ukuran font pada teks deskripsi buku */
        }

        .custom-btn-general {
            background-color: #11284b;
            color: #ffffff;
            border: none;
            /* Menghapus border */
            margin-right: 10px;
        }

        .custom-btn-final-task {
            background-color: #ffffff;
            color: #11284b;
            border: none;
            /* Menghapus border */
        }

        .custom-btn-general:hover {
            background-color: #0056b3;
        }

        .custom-btn-final-task:hover {
            background-color: #0056b3;
        }

        .listbook {
            display: flex;
            flex-direction: column;
            /* Mengatur orientasi menjadi kolom */
            align-items: center;
        }

        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            /* Jarak antara baris */
        }

        .box {
            width: 180px;
            height: 270px;
            background-color: #ffff;
            border: 1px solid #ccc;
            padding: 10px;
            box-sizing: border-box;
            /* padding tidak menambah lebar kotak */
            text-align: center;
            /* Menengahkan konten dalam kotak */
        }

        /* Menambahkan margin kanan pada setiap box kecuali yang terakhir */
        .box+.box {
            margin-left: 20px;
        }

        /* Menghapus margin kanan pada box terakhir di setiap baris */
        .row .box:last-child {
            margin-right: 0;
        }
        .book-box {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
        }

        .book-image {
            margin-right: 20px;
        }

        .book-details {
            flex: 1;
        }

        .book-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .book-author,
        .book-info {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo" style="margin: 0 auto 20px; display: block;">
                    <img src="/img/logoVBooksPutih.png" alt="Logo" style="width: 90px; height: 35px;">
                </a>               
                <ul class="list-unstyled components mb-5">
                    <li class="active"></li>
                    <li><a href="/profile" <?= $menu == 'profile' ? 'style="color: #11284b; font-weight: bold"' : '' ?>>Profile</a></li>
                    <li>
                        <a href="/saved_book" <?= $menu == 'saved_book' ? 'style="color: #11284b; font-weight: bold"' : '' ?>>Saved Book</a>
                    </li>
                    <li><a href="/borrowing_history" <?= $menu == 'borrowing_history' ? 'style="color: #11284b; font-weight: bold"' : '' ?>>Borrowing History</a></li>
                </ul>
                <button onclick="location.href='/login'" class="btn" style="
                    position: absolute;
                    bottom: 30px;
                    left: 30px;
                    background-color: #11284b;
                    color: #fff;
                ">
                    <i class="fa fa-sign-out"></i> Logout
                </button>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn" style="background-color: #487baa; color: #fff">
                        <i class="fa fa-chevron-right"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn d-inline-block d-lg-none ml-auto" style="background-color: #487baa; color: #fff" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-secondary" href="index-user.html"><?= $title; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- content -->
            <?php $this->renderSection('content'); ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>