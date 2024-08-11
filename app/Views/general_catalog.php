<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>General</title>
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      <?php if (session()->getFlashdata('pesan')) : ?>
        alert('<?= session()->getFlashdata('pesan') ?>');
      <?php endif; ?>
    });
  </script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

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

    .listbook .box {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      text-align: center;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 16px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease-in-out;
    }

    .listbook .box img {
      max-height: 200px;
      width: auto;
      margin-bottom: 8px;
    }

    .listbook .box:hover {
      transform: translateY(-5px);
    }

    .listbook .save-link {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #000;
    }

    .listbook .save-link img {
      width: 24px;
      height: 24px;
      margin-right: 8px;
    }

    .listbook .save-link:hover {
      color: #007bff;
    }

    .row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      /* Jarak antara baris */
    }

    .box {
      width: 180px;
      height: auto;
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }

    .box img {
      max-width: 100%;
      max-height: 90%;
      /* Adjust this value to ensure it fits well within the box */
      object-fit: contain;
    }

    .box .title-container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-top: 10px;
    }

    .box p {
      margin: 0;
      padding: 5px 0 0;
      font-size: 14px;
      /* Adjust the font size as needed */
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: normal;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      flex: 1;
    }

    .box p a {
      margin-left: 8px;
      color: blue;
      font-size: 14px;
    }

    /* Menambahkan margin kanan pada setiap box kecuali yang terakhir */
    .box+.box {
      margin-left: 20px;
    }

    /* Menghapus margin kanan pada box terakhir di setiap baris */
    .row .box:last-child {
      margin-right: 0;
    }

    a {
      text-decoration: none;
      color: black;
    }

    .save-link {
      color: blue;
      font-size: 14px;
    }

    .save-icon {
      width: 16px;
      height: 16px;
      margin-left: 8px;
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

  <div class="container-fluid" style="margin-top: 100px;">
    <form class="form-check m-2" action="/cari_general_katalog" method="post" role="search">
      <input class="form-control" type="search" name="keyword" placeholder="Search Book" aria-label="Search" style="
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

  <div class="listbook">
    <div class="row">
        <?php foreach ($book as $index => $b) : ?>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="box d-flex flex-column align-items-center text-center p-3 shadow-sm" style="border: 1px solid #ddd; border-radius: 5px;">
                    <a href="/detail_general/<?= $b['id_buku']; ?>" class="text-decoration-none">
                        <img src="/img/<?= $b['cover']; ?>" alt="<?= $b['title']; ?>" class="img-fluid mb-2" style="max-height: 200px; width: auto;">
                        <div class="title-container">
                          <p><?= $b['title']; ?></p>
                          <a href="/save_buku_general/<?= $b['id_buku']; ?>" class="save-link">
                              <img src="/img/saveicon.png" alt="Save Icon" class="save-icon" style="width: 12px; height: 12px; margin-right: 8px;">
                          </a>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function redirectToLoginPage() {
      // Redirect ke halaman login
      window.location.href = "login.html";
    }
  </script>
</body>
<!-- Bootstrap Bundle with Popper -->

</html>
