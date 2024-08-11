<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>
<div class="table-responsive">
    <form action="/save_edit_user" method="POST">
    <input type="hidden" name="id_user" value="<?= esc($user['id_user']); ?>">
    <div class="form-group">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" class="form-control" id="nama_lengkap" value="<?= esc($user['nama_lengkap']); ?>" name="nama_lengkap" required />
    </div>
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" value="<?= esc($user['username']); ?>" id="username" name="username" required />
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" value="<?= esc($user['email']); ?>" id="email" name="email" required />
    </div>
    <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" value="<?= esc($user['nim']); ?>" id="nim" name="nim" required />
    </div>
    <div class="form-group">
        <label for="program_studi">Study Program:</label>
        <input type="text" class="form-control" value="<?= esc($user['program_studi']); ?>" id="program_studi" name="program_studi" required />
    </div>
    <div class="form-group">
        <label for="no_hp">Phone Number:</label>
        <input type="text" class="form-control" value="<?= esc($user['no_hp']); ?>" id="no_hp" name="no_hp" required />
    </div>
    <div class="form-group">
        <label for="alamat">Address:</label>
        <input type="text" class="form-control" value="<?= esc($user['alamat']); ?>" id="alamat" name="alamat" required />
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>
<?php $this->endSection(); ?>
