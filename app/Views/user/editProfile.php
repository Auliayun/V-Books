<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>


<h2 class="mb-4">Edit Profile</h2>
<form action="/save_profile" method="POST">
  <div class="form-group">
    <label for="nama_lengkap">Full Name:</label>
    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Enter full name" value="<?= $profile['nama_lengkap']; ?>" required />
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= $profile['email']; ?>" required />
  </div>
  <div class="form-group">
    <label for="nim">NIM:</label>
    <input type="number" class="form-control" id="nim" name="nim" placeholder="Enter NIM" value="<?= $profile['nim']; ?>" required />
  </div>
  <div class="form-group">
    <label for="studyPrograms">Study Programs:</label>
    <select class="form-control" id="program_studi" name="program_studi" required>
      <option value="">Select Study Program</option>
      <option value="D4 Manajemen Perhotelan" <?= $profile['program_studi'] === 'D4 Manajemen Perhotelan' ? 'selected' : '' ?>>D4 Manajemen Perhotelan</option>
      <option value="D3 Keuangan dan Perbankan" <?= $profile['program_studi'] === 'D3 Keuangan dan Perbankan' ? 'selected' : '' ?>>D3 Keuangan dan Perbankan</option>
      <option value="D3 Administrasi Bisnis" <?= $profile['program_studi'] === 'D3 Administrasi Bisnis' ? 'selected' : '' ?>>D3 Administrasi Bisnis</option>
      <option value="D4 Desain Grafis" <?= $profile['program_studi'] === 'D4 Desain Grafis' ? 'selected' : '' ?>>D4 Desain Grafis</option>
      <option value="D3 Teknologi Informasi" <?= $profile['program_studi'] === 'D3 Teknologi Informasi' ? 'selected' : '' ?>>D3 Teknologi Informasi</option>
    </select>
  </div>
  <div class="form-group">
    <label for="no_hp">Phone Number:</label>
    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Enter phone number" value="<?= $profile['no_hp']; ?>" required />
  </div>

  <button type="button" class="btn" style="
                    background-color: #ffff;
                    color: #487baa;
                    border: 1px solid #487baa;
                    border-radius: 5px;
                    margin-left: 10px;
                " onclick="location.href='admin-book-data.html'">
    Cancel
  </button>
  <button type="submit" class="btn" style="background-color: #487baa; color: #fff">
    Submit
  </button>
</form>
<?php $this->endSection(); ?>