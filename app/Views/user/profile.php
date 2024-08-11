<?php $this->extend('layout/templateUser'); ?>

<?php $this->section('content'); ?>
<!-- Isi dashboard -->
<div class="text-right mb-3">
    <a href="/edit_profile">
        <button style="
                    background-color: #487baa;
                    color: white;
                    border: none;
                    padding: 10px 20px;
                ">
            Edit Profile
        </button>
    </a>
</div>

<!-- Isi dashboard dalam tabel -->
<div class="table-responsive">
    <table class="table table-striped">
        <tbody>
            <?php if ($profile): ?>
                <tr>
                    <td>Full Name:</td>
                    <td><?= $profile['nama_lengkap']; ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $profile['email']; ?></td>
                </tr>
                <tr>
                    <td>NIM:</td>
                    <td><?= $profile['nim']; ?></td>
                </tr>
                <tr>
                    <td>Study Programs:</td>
                    <td><?= $profile['program_studi']; ?></td>
                </tr>
                <tr>
                    <td>Class of:</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td>03-10-2004</td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>Female</td>
                </tr>
                <tr>
                    <td>Home Address/Cost:</td>
                    <td>JL. Dieng Atas</td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><?= $profile['no_hp']; ?></td>
                </tr>
            <?php else: ?>
                <tr>
                    <td colspan="2">Profile data not available.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $this->endSection(); ?>
