<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Task | Catalog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav {
            margin: 0px;
            display: flex;
        }

        .navbar-nav .nav-link:hover {
            font-weight: bold;
        }

        .custom-box form input[type="search"] {
            background: linear-gradient(135deg, rgba(217, 217, 217, 0.5) 10%, rgba(255, 255, 255, 0.5) 100%);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            margin: 0;
            max-width: 100%;
            width: 1000px;
            margin: auto;
            margin-top: 50px;
        }

        .custom-btn-general {
            background-color: #ffff;
            color: #11284b;
            border: none;
            margin-right: 10px;
        }

        .custom-btn-final-task {
            background-color: #11284b;
            color: #ffff;
            border: none;
        }

        .custom-btn-general:hover,
        .custom-btn-final-task:hover {
            background-color: #0056b3;
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

        .button-container {
            margin-top: 20px;
        }

        .btn-borrow {
            background-color: #487baa;
            color: #ffffff;
            border: none;
            margin-right: 10px;
        }

        .btn-borrow:hover {
            background-color: #0056b3;
            color: #ffffff;
        }

        .btn-read-pdf {
            background-color: #ffff;
            color: #487baa;
            border: 1px solid #487baa;
        }

        .btn-read-pdf:hover {
            background-color: #0056b3;
            color: #ffffff;
        }
    </style>
</head>

<body style="background-color: #eef4fa">
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <div class="logo">
                <a href="/home_page">
                    <img src="/img/logoVBooksBiru.png" width="106" height="30" alt="V-Books Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="margin-right: 64px">
                    <li class="nav-item" style="margin-right: 20px">
                        <a class="nav-link active" aria-current="page" href="/home_page" style="color: #487baa">Home</a>
                    </li>
                    <li class="nav-item" style="margin-right: 30px">
                        <a class="nav-link active" href="/home_page#about" style="color: #487baa">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/general_catalog" style="color: #487baa">Catalog</a>
                    </li>
                </ul>
                <a href="/profile">
                    <img src="/img/user.png" class="profile-img" alt="User Profile" onclick="redirectToProfilePage()">
                </a>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="margin-top: 100px;">
        <form class="form-check m-2" action="/cari_finalTask_katalog" method="post" role="search">
            <input class="form-control" type="search" name="keyword" placeholder="Search Book" aria-label="Search"
                style="padding: 15px; height: 9%; width: 1000px; margin: auto; margin-top: 50px; margin-bottom: 70px;">
        </form>
    </div>

    <div class="text-center" style="margin-left: -760px; margin-bottom: 40px;">
        <a href="general_catalog">
            <button type="button" class="btn btn-primary btn-lg custom-btn-general">General</button>
        </a>
        <a href="finalTask_catalog">
            <button type="button" class="btn btn-secondary btn-lg custom-btn-final-task">Final Task</button>
        </a>
    </div>

    <div class="container mt-4">
        <div class="row">
            <?php foreach ($book as $index => $b) : ?>
                <div class="col-md-6">
                    <div class="book-box">
                        <div class="book-image">
                            <img src="/img/<?= $b['cover']; ?>" alt="<?= $b['title']; ?>" width="200" height="300">
                        </div>
                        <div class="book-details">
                            <div class="book-title"><?= $b['title']; ?></div>
                            <div class="book-author"><?= $b['author']; ?></div>
                            <div class="book-info">Number of Pages: <?= $b['total_page']; ?></div>
                            <div class="book-info">Year of Issue: <?= $b['year']; ?></div>
                            <div class="book-info">Study Program: <?= $b['program_studi']; ?></div>
                            <div class="button-container">
                                <button type="button" class="btn btn-borrow" data-toggle="modal"
                                    data-target="#pinjamBukuModal<?= $index; ?>">Borrow</button>
                                <button type="button" class="btn btn-read-pdf">Read PDF</button>
                                <a href="/save_buku_final/<?= $b['id_buku']; ?>" class="save-link">
                                    <img src="/img/saveicon.png" alt="Save Icon" class="save-icon"
                                        style="margin-left: 60px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Peminjaman Buku -->
                <div class="modal fade" id="pinjamBukuModal<?= $index; ?>" tabindex="-1"
                    aria-labelledby="pinjamBukuModalLabel<?= $index; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="pinjamBukuModalLabel<?= $index; ?>">Formulir Peminjaman Buku</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="formPinjamBuku<?= $index; ?>" action="/pinjam_buku_final" method="post">
                                    <input type="hidden" name="title" value="<?= $b['title']; ?>">
                                    <input type="hidden" name="category" value="<?= $b['category']; ?>">
                                    <div class="form-group">
                                        <label for="namaPeminjam<?= $index; ?>">Full Name:</label>
                                        <input type="text" class="form-control" id="namaPeminjam<?= $index; ?>"
                                            value="<?= $user['nama_lengkap']; ?>" name="nama_lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nimPeminjam<?= $index; ?>">NIM:</label>
                                        <input type="text" class="form-control" id="nimPeminjam<?= $index; ?>" name="nim"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="programStudiPeminjam<?= $index; ?>">Study Program:</label>
                                        <input type="text" class="form-control" id="programStudiPeminjam<?= $index; ?>"
                                            name="program_studi" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggalPinjam<?= $index; ?>">Tanggal Pinjam:</label>
                                        <input type="date" class="form-control" id="tanggalPinjam<?= $index; ?>"
                                            name="tanggal_pinjam" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggalKembali<?= $index; ?>">Tanggal Kembali:</label>
                                        <input type="date" class="form-control" id="tanggalKembali<?= $index; ?>"
                                            name="tanggal_kembali" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- Modal Notifikasi Submit Berhasil -->
    <div class="modal fade" id="notifikasiSubmitBerhasilModal" tabindex="-1"
        aria-labelledby="notifikasiSubmitBerhasilModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notifikasiSubmitBerhasilModalLabel">Submit Berhasil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Formulir telah berhasil disubmit.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        onclick="redirectToCatalog()">Oke</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Notifikasi Submit Gagal -->
    <div class="modal fade" id="notifikasiSubmitGagalModal" tabindex="-1"
        aria-labelledby="notifikasiSubmitGagalModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notifikasiSubmitGagalModalLabel">Submit Gagal</h5>
                </div>
                <div class="modal-body"><?= session()->getFlashdata('error'); ?></div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            <?php if (session()->getFlashdata('pesan')) : ?>
                alert('<?= session()->getFlashdata('pesan') ?>');
            <?php endif; ?>
        });
    </script>
</body>

</html>
