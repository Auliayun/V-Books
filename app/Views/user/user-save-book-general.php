<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>



<form class="form-check m-2" role="search">
    <input class="form-control" type="search" placeholder="Search Book" aria-label="Search" style="padding: 10px; width: 100%" />
    <!-- Menyesuaikan lebar input -->
</form>
<div class="text-center" style="margin-bottom: 20px; margin-left: -800px; margin-top: 20px;">
    <!-- Mengatur jarak dari atas -->
    <a href="/saved_book">
        <button type="button" class="btn btn-primary btn-lg custom-btn-general">
            General
        </button>
    </a>
    <a href="/saved_final">
        <button type="button" class="btn btn-secondary btn-lg custom-btn-final-task">
            Final Task
        </button>
    </a>
</div>

<div class="listbook">
    <!-- Bagian konten dengan daftar buku -->
    <div class="row">
        <?php foreach ($savedBooks as $book): ?>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="box text-center p-3 shadow-sm" style="border: 1px solid #ddd; border-radius: 5px;">
                    <img src="/img/<?= $book['cover']; ?>" alt="<?= $book['title']; ?>" class="img-fluid mb-2" style="max-height: 200px; width: auto;">
                    <p><?= $book['title']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php $this->endSection(); ?>

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
</style>
