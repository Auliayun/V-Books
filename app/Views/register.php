<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #487baa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 400px;
      background-color: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #11284b;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      box-sizing: border-box;
    }

    button:hover {
      background-color: #0056b3;
    }

    .register-link {
      text-align: center;
      margin-top: 15px;
    }

    .register-link a {
      color: #11284b;
      text-decoration: none;
    }

    .register-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="back">
      <a href="/login">
        <img src="/img/panah.png" />
      </a>
      <h2 style="margin-bottom: 30px">Register</h2>
    </div>
    <?php if (session()->getFlashdata('errors')) : ?>
      <div class="card-body">
        <div class="alert alert-danger" style="color: red;" role="alert">
          <ul>
            <?php foreach (session()->getFlashdata('errors') as $error) : ?>
              <li><?= esc($error) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    <?php endif; ?>
    <form method="post" action="/auth/save_register">
      <div class="form-group">
        <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap') ?>" placeholder="Nama Lengkap" />
      </div>
      <div class="form-group">
        <input type="text" id="username" name="username" value="<?= old('username') ?>" placeholder="Username" />
      </div>

      <div class="form-group">
        <input type="email" id="email" name="email" value="<?= old('email') ?>" placeholder="Email" />
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password" style="margin-bottom: 40px" />
      </div>
      <a href="login">
        <button type="submit" style="margin-bottom: 20px">Submit</button>
      </a>
    </form>
  </div>
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 3000);
  </script>
</body>

</html>