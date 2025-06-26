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

  <script>
  function changeText(){
    document.getElementById("Text").textContent= "Magdrop ka na";
  }
  <script>
  
  <body style="background:rgb(32, 83, 117);">

       <?php include 'adminNavbar.php'; ?>  

     <div class="row m-5 py-5">
       
        <div class="col-md-3 py-5 d-flex flex-column align-items-start">
          <button class="admin-glass-btn">Hotlines</button>
          <button class="admin-glass-btn">Articles</button>
        </div>
   
        <div class="col-md-9">
          <div class="admin-glass-box"><p id="Text" class="py-3 m-5">Ni hao fine shyt<p></div>
          <button class="show-glass-btn py-3 m-5 align-items-start" onclick= "changeText()">Show</button>

        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  </body>