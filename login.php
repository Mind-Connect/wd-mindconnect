<?php
include("connection.php");

session_start();
session_destroy();
session_start();


if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $loginquery = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $loginresult = executeQuery($loginquery);

  if (mysqli_num_rows($loginresult) > 0) {

    while ($row = mysqli_fetch_assoc($loginresult)) {
      $_SESSION['userID'] = $row['userID'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];
      $_SESSION['email'] = $row['email'];
    }
    header("Location: admin.php");
 
  } else {
    echo "NO USER FOUND";
  }
}
?>
<?php require_once 'gateKeeper.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | MindConnect</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
      <link rel="icon" type="img/png" href="img/FINAL.png">
    <link rel="icon" type="img/png" href="img/FINAL.png">
  <style>
    body {
      background-image: url('img/3.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      min-height: 100vh;
      display: flex;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
      justify-content: center;


    }

    .login-card {
      background:rgba(255, 255, 255, 0.52);
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      padding: 40px;
      max-width: 400px;
      width: 30%;
    }

    .form-control {
      border-radius: 10px;
    }

    .btn-login {
      border-radius: 10px;
      padding: 10px 30px;
    }

    .form-label {
      font-weight: 500;
    }

    .icon {
      font-size: 3rem;
      color: #6c63ff;
    }

  </style>
</head>

<body>

  <div class="login-card">
    <div class="text-center mb-4">
      <i class="bi bi-person-circle icon"></i>
      <h3 class="mt-2">Login</h3>
      <p class="text-muted">Welcome back! Please login to your account.</p>
    </div>

    <form method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input id="username" class="form-control" type="text" name="username" required>
      </div>

      <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input id="password" class="form-control" type="password" name="password" required>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-login w-100">Login</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
