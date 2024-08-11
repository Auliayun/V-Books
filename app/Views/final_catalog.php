<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Final Task | Catalog</title>

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

  <head>
    <style>
      .navbar-nav {
        margin: 0px;
        display: flex;
      }

      .navbar-nav .nav-link:hover {
        font-weight: bold;
      }

      .custom-box form input[type="search"] {
        background: linear-gradient(135deg,
            rgba(217, 217, 217, 0.5) 10%,
            rgba(255, 255, 255, 0.5) 100%);
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        margin: 0;
        max-width: 100%;
        /* Tambahkan max-width untuk responsif */
        width: 1000px;
        margin: auto;
        margin-top: 50px;
      }

      .custom-btn-general {
        background-color: #ffff;
        color: #11284b;
        border: none;
        /* Menghapus border */
        margin-right: 10px;
      }

      .custom-btn-final-task {
        background-color: #11284b;
        color: #ffff;
        border: none;
        /* Menghapus border */
      }

      .custom-btn-general:hover {
        background-color: #0056b3;
      }

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

      .book-author {
        margin-bottom: 10px;
      }

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

  <div class="container-fluid">
    <form class="form-check m-2" role="search">
      <input class="form-control" type="search" placeholder="Search Book" aria-label="Search" style="
              padding: 15px;
              height: 100%;
              width: 1000px;
              margin: auto;
              margin-top: 50px;
              margin-bottom: 70px;
            " />
    </form>
  </div>

  <div class="text-center" style="margin-left: -760px; margin-bottom: 40px">
    <a href="general_catalog">
      <button type="button" class="btn btn-primary btn-lg custom-btn-general">
        General
      </button>
    </a>
    <a href="finalTask_catalog">
      <button type="button" class="btn btn-secondary btn-lg custom-btn-final-task">
        Final Task
      </button>
    </a>
  </div>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <div class="book-box">
          <div class="book-image">
            <img src="/img/TAbook.png" alt="Book 1" width="200" height="300">
          </div>
          <div class="book-details">
            <div class="book-title">Rancang Bangun Sistem Informasi Posyandu Berbasis Web (Studi Kasus : Posyandu Delima Desa Bangilan)</div>
            <div class="book-author">Irma Nur Ardiyanti</div>
            <div class="book-info">Number of Pages: 85</div>
            <div class="book-info">Year of Issue: 2023</div>
            <div class="book-info">Study Program: Teknologi Informasi</div>
            <div class="button-container">
              <button type="button" class="btn btn-borrow" data-toggle="modal" data-target="#pinjamBukuModal">Borrow</button>
              <button type="button" class="btn btn-read-pdf">Read PDF</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Repeat book box as needed -->
  </div>

  <!-- Modal Peminjaman Buku -->
  <div class="modal fade" id="pinjamBukuModal" tabindex="-1" aria-labelledby="pinjamBukuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="pinjamBukuModalLabel">Formulir Peminjaman Buku</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formPinjamBuku">
            <div class="form-group">
              <label for="namaPeminjam">Full Name:</label>
              <input type="text" class="form-control" id="namaPeminjam" name="namaPeminjam" required>
            </div>
            <div class="form-group">
              <label for="nimPeminjam">NIM:</label>
              <input type="text" class="form-control" id="nimPeminjam" name="nimPeminjam" required>
            </div>
            <div class="form-group">
              <label for="programStudiPeminjam">Study Program:</label>
              <input type="text" class="form-control" id="programStudiPeminjam" name="programStudiPeminjam" required>
            </div>
            <div class="form-group">
              <label for="tanggalPinjam">Tanggal Pinjam:</label>
              <input type="date" class="form-control" id="tanggalPinjam" name="tanggalPinjam" required>
            </div>
            <div class="form-group">
              <label for="tanggalKembali">Tanggal Kembali:</label>
              <input type="date" class="form-control" id="tanggalKembali" name="tanggalKembali" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
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
        <div class="modal-body">
          Formulir telah berhasil disubmit.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="redirectToCatalog()">Oke</button>
        </div>
      </div>
    </div>
  </div>





  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function submitForm() {
      // Hide the form modal
      $('#pinjamBukuModal').modal('hide');

      // Clear the form fields
      document.getElementById('formPinjamBuku').reset();

      // Remove the modal from the DOM
      $('#pinjamBukuModal').remove();

      // Show the confirmation modal
      $('#notifikasiSubmitBerhasilModal').modal('show');
    }

    function redirectToCatalog() {
      window.location.href = "general_catalog.html"; // Ganti dengan URL halaman katalog Anda
    }
  </script>







</body>

</html>