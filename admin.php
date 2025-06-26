<?php
session_start();
if (!isset($_SESSION['userID'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mind Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="img/png" href="img/FINAL.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <style>
    <?php include 'adminStyle.css'; ?>
  </style>
  
  <body style="background:rgb(32, 83, 117);">

    <?php include 'adminNavbar.php'; ?>  

    <div class="row m-5 py-5">
      <div class="col-md-3 py-5 d-flex flex-column align-items-start">
        <button id="previewButton" class="admin-glass-btn" onclick="changePreview()">Preview</button>
        <button id="activityButton" class="admin-glass-btn" onclick="changeActivity()">Activity Log</button>
      </div>
      <div id="preview" class="col-md-9">
        <div class="admin-glass-box mt-3">
          <p id="Text" class="py-3 mx-5">Ni hao fine shyt</p>
        </div>
        <button id="showButton" class="show-glass-btn py-3 m-5 align-items-start" onclick="changeText()">Show</button>
      </div>
      <div id="activityLog" class="col-md-9" style="display: none;">
        <div class="admin-glass-box mt-3">
          <p id="Text2" class="py-3 mx-5">Annyeong fine shyt</p>
        </div>
      </div>
    </div>

    <script>
      function changeText(){
        var textElement = document.getElementById("Text");
        var showButton =  document.getElementById("showButton");

        if(showButton.textContent == "Show"){
          textElement.textContent = "Magdrop Ka na";
          showButton.textContent = "Hide";
          showButton.style.backgroundColor = "rgb(255, 102, 102)";
          showButton.style.color = "rgb(255,255,255)";
        } else {
          textElement.textContent = "Ni hao fine shyt";
          showButton.textContent = "Show";
          showButton.style.backgroundColor = "";
          showButton.style.color = "";
        }
      }

      function changePreview(){
        document.getElementById("preview").style.display = "block";  
        document.getElementById("activityLog").style.display = "none";
      }

      function changeActivity(){
        document.getElementById("preview").style.display = "none";  
        document.getElementById("activityLog").style.display = "block";
      }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  </body>