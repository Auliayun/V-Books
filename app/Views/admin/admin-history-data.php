<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<!-- Isi dashboard -->
<div class="table-responsive">
  <div class="text-right mb-3">
    <div class="container-fluid d-flex justify-content-between align-items-center mb-3">
      <form class="form-check m-2" role="search">
        <input class="form-control" type="search" placeholder="Search Book" aria-label="Search" style="padding: 15px; width: 700px" />
      </form>
    </div>
  </div>
  <table class="table table-hover table-striped" style="font-size: 12px;"> <!-- Penambahan style font-size -->
    <thead class="text-center" style="background-color: #487baa; color: #fff">
      <tr>
        <th>No</th>
        <th style="width: 20%;">Book Title</th>
        <th>Categories</th>
        <th>Borrower Name</th>
        <th style="width: 5%;">Study Programs</th>
        <th>Guarantee Date</th>
        <th>Return Date</th>
        <th>Status</th>
        <th>Update Status</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php foreach ($pinjam as $index => $p) : ?>
        <tr>
          <td><?= $index + 1; ?></td>
          <td><?= $p['title']; ?></td>
          <td><?= $p['category']; ?></td>
          <td><?= $p['nama_lengkap']; ?></td>
          <td><?= $p['program_studi']; ?></td>
          <td><?= $p['tanggal_pinjam']; ?></td>
          <td><?= $p['tanggal_kembali']; ?></td>
          <td>
            <form action="/update_status/<?= $p['id_pinjam']; ?>" method="post">
              <select name="status" class="form-control" id="status1" <?= $p['status'] === 'On Loan' ? 'style="background-color: #ffbc49;color: #fff;border: none;"' : 'style="background-color: green;color: #fff;border: none;"' ?>>
                <option value="On Loan" <?= $p['status'] === 'On Loan' ? 'selected' : '' ?>>On Loan</option>
                <option value="Done" <?= $p['status'] === 'Done' ? 'selected' : '' ?>>Done</option>
              </select>
          </td>
          <td>
            <button type="submit" class="btn btn-primary" style="font-size: 12px;">Update</button> <!-- Penambahan style font-size -->
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<?= $this->endSection(); ?>
