<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
      <div class="col-md-6 col-lg-4">
        <div class="card shadow rounded-4 p-3">
          <div class="card-body">
            <h3 class="text-center mb-4">Admin Login</h3>

            <form>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" required>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" required>
              </div>

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>

              <div class="text-center">
                <small class="text-muted">Admin access only</small>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
