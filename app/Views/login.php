<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
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
    input[type="password"] {
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
    <h2>Login to Your Account</h2>
    <?php if (session()->getFlashdata('login')) : ?>
      <div class="card-body">
        <div class="alert alert-danger" role="alert">
          <?= esc(session()->getFlashdata('login')) ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="card-body">
        <div class="alert alert-success" style="color: greenyellow;" role="alert">
          <?= esc(session()->getFlashdata('pesan')) ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('salah')) : ?>
      <div class="card-body">
        <div class="alert alert-danger" role="alert">
          <?= esc(session()->getFlashdata('salah')) ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('errorslogin')) : ?>
      <div class="card-body">
        <div class="alert alert-danger" role="alert">
          <ul>
            <?php foreach (session()->getFlashdata('errorslogin') as $error) : ?>
              <li><?= esc($error) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    <?php endif; ?>

    <form method="post" action="/auth/cek_login">
      <div class="form-group">
        <input type="text" id="username" name="username" placeholder="Username" />
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password" style="margin-bottom: 30px" />
      </div>
      <a href="home_page">
        <button type="submit">Login</button>
      </a>
    </form>
    <div class="register-link">
      <span style="font-size: 14px">Don’t have an account? </span>
      <a href="register">Register</a>
    </div>


  </div>





</body>

</html>