<?php
session_start();
if (!isset($_SESSION['userID'])) {
    header("Location: login.php");
    exit();
}
include 'connection.php'; 
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mind Connect - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="icon" type="img/png" href="img/FINAL.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    <?php include 'adminStyle.css'; ?>
  </style>
</head>

<body style="background:rgb(32, 83, 117);">
  <?php include 'adminNavbar.php'; ?>

  <div class="row m-5 py-5">
    <div class="col-md-3 py-5 d-flex flex-column align-items-start">
      <button id="previewButton" class="admin-glass-btn mb-2" onclick="changePreview()">Preview</button>
      <button id="activityButton" class="admin-glass-btn" onclick="changeActivity()">Access Table</button>
    </div>

    <div id="preview" class="col-md-9">
      <div class="admin-glass-box mt-3" style="height: 60vh; padding: 1rem;">
        <iframe src="index.php" style="width: 100%; height: 100%; border: none; background: #fff;"></iframe>
      </div>
      <button id="showButton" class="show-glass-btn py-3 m-5 align-items-start" onclick="togglePageStatus()">
        Loading Status...
      </button>
    </div>

    <div id="activityLog" class="col-md-9" style="display: none;">
      <div class="admin-glass-box mt-3 p-4 bg-light" style="max-height: 60vh; overflow-y: auto;">
        <h4>Article Table</h4>
        <table class="table table-bordered table-striped mb-5">
          <thead class="table-secondary">
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Source</th>
              <th>Year</th>
              <th>URL</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $articleQuery = "SELECT * FROM article";
              $result = mysqli_query($conn, $articleQuery);
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['source']}</td>
                        <td>{$row['year']}</td>
                        <td><a href='{$row['url']}' target='_blank'>Link</a></td>
                      </tr>";
              }
            ?>
          </tbody>
        </table>

        <h4>Hotlines Table</h4>
        <table class="table table-bordered table-striped mb-5">
          <thead class="table-secondary">
            <tr>
              <th>ID</th>
              <th>Category</th>
              <th>Organization</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Notes</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $hotlineQuery = "SELECT * FROM hotlines";
              $result = mysqli_query($conn, $hotlineQuery);
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['category']}</td>
                        <td>{$row['organization']}</td>
                        <td>{$row['phone_number']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['notes']}</td>
                      </tr>";
              }
            ?>
          </tbody>
        </table>

        <h4>Users Table</h4>
        <table class="table table-bordered table-striped">
          <thead class="table-secondary">
            <tr>
              <th>User ID</th>
              <th>Username</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $userQuery = "SELECT * FROM users";
              $result = mysqli_query($conn, $userQuery);
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['userID']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                      </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    const showButton = document.getElementById("showButton");
    const previewFrame = document.querySelector('#preview iframe');

    function updateButtonUI(status) {
      if (status === 'live') {
        showButton.textContent = "Hide Site";
        showButton.style.backgroundColor = "rgb(255, 102, 102)";
        showButton.style.color = "rgb(255,255,255)";
      } else {
        showButton.textContent = "Show Site";
        showButton.style.backgroundColor = "";
        showButton.style.color = "";
      }
    }

    async function togglePageStatus() {
      try {
        const response = await fetch('togglePage.php', { method: 'POST' });
        if (!response.ok) throw new Error('Network response was not ok');
        
        const data = await response.json();
        updateButtonUI(data.newStatus);
        previewFrame.src = previewFrame.src;
      } catch (error) {
        console.error('Error toggling page status:', error);
        alert('Failed to update page status.');
      }
    }

    function getInitialStatus() {
      <?php
        $initialStatus = trim(file_get_contents('pageStatus.txt'));
        echo "const initialStatus = '$initialStatus';";
      ?>
      updateButtonUI(initialStatus);
    }

    document.addEventListener('DOMContentLoaded', getInitialStatus);

    function changePreview() {
      document.getElementById("preview").style.display = "block";
      document.getElementById("activityLog").style.display = "none";
    }

    function changeActivity() {
      document.getElementById("preview").style.display = "none";
      document.getElementById("activityLog").style.display = "block";
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
