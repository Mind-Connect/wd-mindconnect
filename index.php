<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mind Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="icon" type="img/png" href="img/FINAL.png">
  </head>

  <style>
    <?php include 'style.css'; ?>
  </style>

  <body>

  <?php include 'userNavbar.php'; ?>  

    <section class="hero-section my-5">
      <div class="hero-overlay"></div>
      <div class="container hero-content">
        <h5>Caring for a better life</h5>
        <h1 style="color: rgb(255, 255, 255);">Your Mental Health Matters.</h1> 
        <p>
          Take time to check in with yourself. It's okay to pause, to breathe, and to ask for help when you need it. You don't have to go through anything alone — support is always within reach. Caring for your mental well-being is not a sign of weakness, but a step toward strength. You deserve peace, healing, and support.
        </p>
      </div>
    </section>

  <section>
    <div class="container main-area">
      <div class="row m-3 py-5">
       
        <div class="col-md-3 py-5 d-flex flex-column align-items-start">
          <button id = "hotlineButton" class="glass-btn" onclick= changeHotline()>Hotlines</button>
          <button id = "articleButton" class="glass-btn" onclick= changeArticle()>Articles</button>
        </div>
   
        <div id= "hotline" class="col-md-9">
          <div class="glass-box ">adfd</div>
        </div>
        
        <div id= "article" class="col-md-9" style="display: none;">
          <div class="glass-box">sffd</div>
        </div>
      </div>
  </section>

        <?php include 'quotes.php'; ?>  

      
    </div>

    <script>
   function changeHotline(){
  document.getElementById("hotline").style.display = "block";  
  document.getElementById("article").style.display = "none";
}

function changeArticle(){
  document.getElementById("hotline").style.display = "none";  
  document.getElementById("article").style.display = "block";
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  </body>