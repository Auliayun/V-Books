<?php $this->extend('layout/templateAdmin'); ?>

<?php $this->section('content'); ?>

<!-- Isi dashboard -->
<div class="container">
  <h2 class="mb-4">Add Book</h2>
  <form action="/save_general" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Book Title:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter book title" required />
    </div>
    <div class="form-group">
      <label for="author">Author:</label>
      <input type="text" class="form-control" id="author" name="author" placeholder="Enter author name" required />
    </div>
    <div class="form-group">
      <label for="category">Categories:</label>
      <input type="text" class="form-control" id="category" name="category" placeholder="Enter categories" required />
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea name="description" id="description" cols="30" rows="10" style="width: 100%;" placeholder="Enter description" required></textarea>
    </div>
    <div class="form-group">
      <label for="year">Year:</label>
      <input type="number" class="form-control" id="year" name="year" placeholder="Enter year" required />
    </div>
    <div class="form-group">
      <label for="total_page">Number of Page:</label>
      <input type="number" class="form-control" id="total_page" name="total_page" placeholder="Enter number of page" required />
    </div>
    <div class="form-group">
      <label for="language">Language:</label>
      <input type="text" class="form-control" id="language" name="language" placeholder="Enter language" required />
    </div>
    <div class="form-group">
      <label for="cover">Photo Cover Book:</label>
      <input type="file" class="form-control-file" id="cover" required name="cover" accept="image/*" onchange="previewImage(event)" />
      <img id="preview" src="#" alt="Preview cover" style="max-width: 200px; display: none;">
    </div>
    <div class="form-group">
      <label for="link_gdrive">Link Google Drive:</label>
      <input type="text" class="form-control" id="link_gdrive" name="link_gdrive" placeholder="Enter link" required />
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
      Add Book
    </button>
  </form>
</div>
<?php $this->endSection(); ?>