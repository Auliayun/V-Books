<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
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
            flex: 1;
            overflow-y: auto;
            height: 100vh;
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

        .table thead th {
            background-color: #487baa;
            color: #fff;
        }

        .table th,
        .table td {
            vertical-align: middle;
            font-size: 12px; /* Mengurangi ukuran font */
            padding: 8px; /* Mengurangi padding */
        }

        .table thead th {
            font-size: 12px; /* Mengurangi ukuran font header */
        }

        @media (max-width: 768px) {
            #sidebar {
                min-width: 100%;
                max-width: 100%;
                position: relative;
            }

            #content {
                width: 100%;
                padding: 10px;
                overflow-x: auto; /* Tambahkan overflow-x agar bisa di-scroll jika terlalu lebar */
            }
        }

        select[name="status"] {
            font-size: 12px; /* Sesuaikan ukuran font sesuai kebutuhan */
        }

        .btn-primary {
            font-size: 12px; /* Sesuaikan ukuran font sesuai kebutuhan */
        }


.btn-general, .btn-final {
    font-size: 14px; /* Sesuaikan ukuran font sesuai kebutuhan */
    padding: 10px 20px; /* Sesuaikan padding sesuai kebutuhan */
    text-align: center; /* Pusatkan teks di dalam tombol */
    display: inline-block; /* Pastikan tombol hanya mengambil ruang yang dibutuhkan oleh teks */
    margin: 0 5px; /* Tambahkan margin untuk memberikan ruang di antara tombol */
    white-space: nowrap; /* Mencegah teks terpotong ke baris berikutnya */
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
                    <li>
                        <a href="/book_data" <?= $menu == 'book_data' ? 'style="color: #11284b; font-weight: bold"' : '' ?>>Manage Book Data</a>
                    </li>
                    <li><a href="/data_user" <?= $menu == 'data_user' ? 'style="color: #11284b; font-weight: bold"' : '' ?>>Manage User Data</a></li>
                    <li>
                        <a href="/history_data_borrowing" <?= $menu == 'data_borrow' ? 'style="color: #11284b; font-weight: bold"' : '' ?>>Manage History Data Borrowing</a>
                    </li>
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

        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-chevron-right"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-primary d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    <script>
        document.getElementById("sidebarCollapse").addEventListener("click", function() {
            document.getElementById("sidebar").classList.toggle("active");
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        }
    </script>
</body>

</html>
