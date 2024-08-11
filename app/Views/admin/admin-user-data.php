<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<div class="table-responsive">
    <div class="text-right mb-3">
        <div class="container-fluid d-flex justify-content-between align-items-center mb-3">
            <form class="form-check m-2" role="search" method="GET" action="/search_user">
                <input class="form-control" type="search" name="keyword" placeholder="Search" aria-label="Search"
                    style="padding: 15px; width: 700px" />
            </form>
        </div>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="card-body">
        <div class="alert alert-success" role="alert" style="color: green;">
            <?= esc(session()->getFlashdata('pesan')) ?>
        </div>
    </div>
    <?php endif; ?>
    <table class="table table-hover table-striped">
        <thead class="text-center" style="background-color: #487baa; color: #fff">
            <tr>
                <th>No</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>NIM</th>
                <th>Study Program</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="text-center">
    <?php foreach ($user as $index => $u) : ?>
    <tr>
        <td><?= $index + 1; ?></td>
        <td><?= esc($u['nama_lengkap']); ?></td>
        <td><?= esc($u['username']); ?></td>
        <td><?= esc($u['email']); ?></td>
        <td><?= esc($u['nim']); ?></td>
        <td><?= esc($u['program_studi']); ?></td>
        <td><?= esc($u['no_hp']); ?></td>
        <td><?= esc($u['alamat']); ?></td>
        <td>
            <a href="edit_user/<?= $u['id_user']; ?>">
                <button style="
                        background-color: #487baa;
                        color: white;
                        border: none;
                    ">
                    Edit
                </button>
            </a>
            <form action="/delete_user/<?= esc($u['id_user']); ?>" method="POST" style="display:inline;">
    <?= csrf_field() ?>
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" style="background-color: red; color: white; border: none"
        onclick="return confirm('Are you sure you want to delete this user?');">
        Delete
    </button>
</form>


        </td>
    </tr>
    <?php endforeach ?>
</tbody>

    </table>
</div>

<?php $this->endSection(); ?>


