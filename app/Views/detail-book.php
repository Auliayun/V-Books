<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail Book</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <style>
    .navbar-nav {
      margin: 0px;
      display: flex;
    }

    .book-container {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      /* Menjadikan konten berada di antara */
      margin: 50px auto;
      max-width: 1000px;
      position: relative;
    }

    .book-cover {
      flex: 0 0 200px;
      /* lebar tetap */
      margin-right: 20px;
      position: relative;
    }

    .book-cover img {
      max-width: 100%;
      height: auto;
    }

    .book-details {
      flex: 1;
    }

    .book-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .book-description {
      font-size: 16px;
      line-height: 1.6;
      text-align: justify;
      /* Menjadikan teks rata kanan kiri */
    }

    /* Container detail tambahan */
    .detail-container {
      flex: 0 0 200px;
      /* lebar tetap */
      margin-left: 20px;
      padding: 20px;
    }

    .detail-container h5 {
      margin-bottom: 10px;
    }

    /* Back Arrow */
    .back-arrow-container {
      position: absolute;
      top: 0;
      left: -50px;
      /* Adjust this value based on your layout */
      z-index: 1;
      /* Ensure it's above the book cover */
    }

    .back-arrow {
      font-size: 24px;
      cursor: pointer;
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
            <img src="/img/logoVBooksBiru.png" width="106" height="30" alt="V-Books Logo" />
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
                <img src="/img/user.png" class="profile-img" alt="User Profile" onclick="redirectToProfilePage()" />
            </a>      
            </div>
        </div>
    </nav>

  <div class="book-container" style="margin-top: 130px;">
    <div class="book-cover">
      <div class="back-arrow-container">
        <!-- Back Arrow Icon -->
        <a href="/general_catalog" style="color: black;">
          <i class="fas fa-arrow-left back-arrow"></i>
        </a>
      </div>
      <img src="/img/<?= $book['cover']; ?>" alt="Cover Buku" />
    </div>
    <div class="book-details">
      <div class="book-title"><?= $book['title']; ?></div>
      <h6>by <?= $book['author']; ?></h6>
      <div class="button-container">
        <button type="button" class="btn btn-borrow" data-toggle="modal" data-target="#pinjamBukuModal">
          Borrow
        </button>
        <a href="<?= $book['link_gdrive']; ?>" target="_blank">
          <button type="button" class="btn btn-read-pdf">Read PDF</button>
        </a>
      </div>
      <!-- Modal Peminjaman Buku -->
      <div class="modal fade" id="pinjamBukuModal" tabindex="-1" aria-labelledby="pinjamBukuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="pinjamBukuModalLabel">
                Formulir Peminjaman Buku
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="formPinjamBuku" action="/pinjam_buku" method="post">
                <input type="hidden" name="id_buku" value="<?= $book['id_buku']; ?>">
                <input type="hidden" name="title" value="<?= $book['title']; ?>">
                <input type="hidden" name="category" value="<?= $book['category']; ?>">
                <div class="form-group">
                  <label for="nama_lengkap">Full Name:</label>
                  <input type="text" class="form-control" id="nama_lengkap" value="<?= $user['nama_lengkap']; ?>" name="nama_lengkap" required />
                </div>
                <div class="form-group">
                  <label for="nim">NIM:</label>
                  <input type="text" class="form-control" id="nim" name="nim" required />
                </div>
                <div class="form-group">
                  <label for="program_studi">Study Program:</label>
                  <input type="text" class="form-control" id="program_studi" name="program_studi" required />
                </div>
                <div class="form-group">
                  <label for="tanggal_pinjam">Tanggal Pinjam:</label>
                  <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required />
                </div>
                <div class="form-group">
                  <label for="tanggal_kembali">Tanggal Kembali:</label>
                  <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                  </button>
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Notifikasi Submit Berhasil -->
      <div class="modal fade" id="notifikasiSubmitBerhasilModal" tabindex="-1" aria-labelledby="notifikasiSubmitBerhasilModalLabel" aria-hidden="true">
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
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="redirectToCatalog()">Oke</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Notifikasi Submit Gagal -->
      <div class="modal fade" id="notifikasiSubmitGagalModal" tabindex="-1" aria-labelledby="notifikasiSubmitGagalModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="notifikasiSubmitGagalModalLabel">Submit Gagal</h5>
            </div>
            <div class="modal-body"><?= session()->getFlashdata('error'); ?></div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>

      <h5 style="margin-top: 40px">Deskripsi</h5>
      <!-- Ditambahkan tulisan "Deskripsi" dengan tag h5 -->
      <div class="book-description">
        <?= $book['description']; ?>
      </div>
    </div>

    <!-- Container detail tambahan -->
    <div class="detail-container" style="margin-top: 85px">
      <h5>Detail</h5>
      <div style="display: flex; flex-direction: column; margin-top: 15px">
        <strong>Number of Pages:</strong>
        <span><?= $book['total_page']; ?></span>
      </div>
      <div style="display: flex; flex-direction: column; margin-top: 15px">
        <strong>Year of Issue:</strong>
        <span><?= $book['year']; ?></span>
      </div>
      <div style="display: flex; flex-direction: column; margin-top: 15px">
        <strong>Language:</strong>
        <span><?= $book['language']; ?></span>
      </div>
    </div>
  </div>

  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function redirectToCatalog() {
      window.location.href = "/general_catalog";
    }

    <?php if (session()->getFlashdata('pesan')) : ?>
      $(document).ready(function() {
        $('#notifikasiSubmitBerhasilModal').modal('show');
      });
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
      $(document).ready(function() {
        $('#notifikasiSubmitGagalModal').modal('show');
      });
    <?php endif; ?>
  </script>
</body>

</html>