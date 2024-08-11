<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>
<div class="table-responsive">
    <div class="text-right mb-3">
        <div class="container-fluid d-flex justify-content-between align-items-center mb-3">
            <form class="form-check m-2" role="search">
                <input class="form-control" type="search" placeholder="Search Book" aria-label="Search" style="padding: 15px; width: 700px" />
            </form>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Add Book
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/tambah_buku_general">General</a>
                    <a class="dropdown-item" href="/tambah_buku_final">Final Task</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-1" data-wow-delay="0.1s">
        <div class="row" data-wow-delay="0.1s">
            <div class="col-md-1">
                <a href="/book_data" class="btn btn-general mb-2" style=" color:#487baa; background-color: #fff; border: 1px solid #487baa;" >General</a>
            </div>
            <div class="col-md-1">
                <a href="/book_data_final" class="btn btn-final btn-primary mb-2" style="margin-left: 40px;">Final Task</a>
            </div>
        </div>


        </div>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="card-body">
            <div class="alert alert-success" role="alert" style="color: green;">
                <?= esc(session()->getFlashdata('pesan')) ?>
            </div>
        </div>
    <?php endif; ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th style="width: 10%;">Cover</th>
                <th style="width: 25%;">Book Title</th>
                <th>Categories</th>
                <th>Year</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($book as $index => $b) : ?>
                <tr>
                    <td><?= $index + 1; ?></td>
                    <td><img src="/img/<?= $b['cover']; ?>" style="width: 80%;" alt=""></td>
                    <td><?= $b['title']; ?></td>
                    <td><?= $b['category']; ?></td>
                    <td><?= $b['year']; ?></td>
                    <td><?= $b['author']; ?></td>
                    <td>
                        <a href="/edit_final/<?= $b['id_buku']; ?>">
                            <button style="
                      background-color: #487baa;
                      color: #fff;
                      border: none;
                    ">Edit</button>
                        </a>
                        <a href="/delete_final/<?= $b['id_buku']; ?>">
                            <button style="background-color: red;
                      color: #fff;
                      border: none;
                      color: #fff;
                      border: none;">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
            <!-- Additional rows can be added as needed -->
        </tbody>
    </table>
</div>
<?php $this->endSection(); ?>