<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<!-- Isi dashboard -->
<div class="container">
    <h2 class="mb-4">Edit Book</h2>
    <form action="/edit_save_general" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_buku" id="id_buku" class="" value="<?= $book['id_buku']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $book['cover']; ?>">
        <div class="form-group">
            <label for="title">Book Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= $book['title']; ?>" required />
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" class="form-control" id="author" name="author" value="<?= $book['author']; ?>" required />
        </div>
        <div class="form-group">
            <label for="category">Categories:</label>
            <input type="text" class="form-control" id="category" name="category" value="<?= $book['category']; ?>" required />
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="10" style="width: 100%;" required><?= $book['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" class="form-control" id="year" name="year" value="<?= $book['year']; ?>" required />
        </div>
        <div class="form-group">
            <label for="total_page">Number of Page:</label>
            <input type="number" class="form-control" id="total_page" name="total_page" value="<?= $book['total_page']; ?>" required />
        </div>
        <div class="form-group">
            <label for="language">Language:</label>
            <input type="text" class="form-control" id="language" name="language" value="<?= $book['language']; ?>" required />
        </div>
        <div class="form-group">
            <label for="cover">Photo Cover Book:</label>
            <input type="file" class="form-control-file" id="cover" name="cover" value="<?= $book['cover']; ?>" accept="image/*" onchange="previewImage(event)" />
            <img id="preview" src="/img/<?= $book['cover']; ?>" alt="Preview cover" style="max-width: 200px; display: none;">
        </div>
        <div class="form-group">
            <label for="link_gdrive">Link Google Drive:</label>
            <input type="text" class="form-control" id="link_gdrive" name="link_gdrive" value="<?= $book['link_gdrive']; ?>" required />
        </div>
        <button type="button" class="btn" style="
                background-color: #ffff;
                color: #487baa;
                border: 1px solid #487baa;
                border-radius: 5px;
                margin-left: 10px;
                " onclick="location.href='/book_data'">
            Cancel
        </button>
        <button type="submit" class="btn" style="background-color: #487baa; color: #fff">
            Edit Book
        </button>
    </form>
</div>
<?php $this->endSection(); ?>