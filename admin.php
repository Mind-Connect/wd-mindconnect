<?php

session_start();
if (!isset($_SESSION['userID'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
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
            <button id="previewButton" class="admin-glass-btn" onclick="changePreview()">Preview</button>
            <button id="activityButton" class="admin-glass-btn" onclick="changeActivity()">Activity Log</button>
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
            <div class="admin-glass-box mt-3">
                <p id="Text2" class="py-3 mx-5">Activity Log Content Here</p>
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