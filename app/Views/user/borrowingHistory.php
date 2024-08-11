<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>

<table class="table table-hover table-striped">
    <thead class="text-center" style="background-color: #487baa; color: #fff">
        <tr>
            <th>No</th>
            <th style="width: 20%;">Book Title</th>
            <th>Categories</th>
            <th>Guarantee Date</th>
            <th>Return Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php foreach ($pinjam as $index => $p) : ?>
            <tr>
                <td><?= $index + 1; ?></td>
                <td><?= $p['title']; ?></td>
                <td><?= $p['category']; ?></td>
                <td><?= $p['tanggal_pinjam']; ?></td>
                <td><?= $p['tanggal_kembali']; ?></td>
                <td>
                    <button <?= $p['status'] === 'On Loan' ? 'style="background-color: #ffbc49;color: #fff;border: none;"' : 'style="background-color: green;color: #fff;border: none;"' ?>>
                        <?= $p['status']; ?>
                    </button>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php $this->endSection(); ?>