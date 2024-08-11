<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<form class="form-check m-2" role="search">
    <input class="form-control" type="search" placeholder="Search Book" aria-label="Search" style="padding: 10px; width: 100%" />
    <!-- Menyesuaikan lebar input -->
</form>

<div class="text-center" style="margin-left: -760px; margin-bottom: 40px">
    <a href="general_catalog">
        <button type="button" class="btn btn-secondary btn-lg custom-btn-final-task">
            General
        </button>
    </a>
    <a href="finalTask_catalog">
        <button type="button" class="btn btn-primary btn-lg custom-btn-general">
            Final Task
        </button>
    </a>
</div>

<div class="container mt-4">
    <div class="row">
        <?php foreach ($savedBooks as $index => $b) : ?>
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
        <?php endforeach ?>
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

<style>
    .box {
        background-color: #fff;
        transition: transform 0.2s ease;
    }

    .box:hover {
        transform: scale(1.05);
    }

    .img-fluid {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .book-title {
        font-size: 14px;
        /* Ukuran font judul buku */
        margin-top: 0;
        /* Menghapus margin atas agar tidak terlalu jauh dari gambar */
    }
</style>
<?php $this->endSection(); ?>