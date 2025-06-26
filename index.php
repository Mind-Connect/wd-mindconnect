<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mind Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">

    <link rel="icon" type="img/png" href="img/FINAL.png">
  </head>

  <style>
    <?php include 'style.css'; ?>
  </style>

  <body>

    <div class="container-fluid shadow" style="background:#205375;">
      <div class="container">
        <div class="row">
          <div class="col py-3">
            <div class="d-flex flex-row justify-content-between align-items-center">
              <div class="d-flex flex-row justify-content-start align-items-center">
                <a class="navbar-brand text-white d-flex align-items-center" href="#">
                  <img src="img/FINAL.png" alt="Logo">
                  Mind Connect
                </a>
              </div>
              <div class="d-flex flex-row justify-content-end align-items-center">
                <ul class="navbar-nav ms-auto d-flex flex-row">
                  <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="hero-section">
      <div class="hero-overlay"></div>
      <div class="container hero-content">
        <h5>Caring for a better life</h5>
        <h1 style="color: rgb(0,0,0);">Your Mental Health Matters.</h1>
        <p>
          Take time to check in with yourself. It's okay to pause, to breathe, and to ask for help when you need it. You don't have to go through anything alone — support is always within reach. Caring for your mental well-being is not a sign of weakness, but a step toward strength. You deserve peace, healing, and support.
        </p>
      </div>
    </section>


    <div class="container main-area">
      <div class="row m-3 py-5">
       
        <div class="col-md-3 d-flex flex-column align-items-start">
          <button class="glass-btn">Hotlines</button>
          <button class="glass-btn">Articles</button>
        </div>
   
        <div class="col-md-9">
          <div class="glass-box"></div>
        </div>
      </div>

      <div class="row m-3 py-5 justify-content-center">
       
        <div class="col-md-9 d-flex flex-column">
          <div class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
              <img src="img/quote 1.jpg" class="d-block w-100" alt="quote 1">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/quote 2.jpg" class="d-block w-100" alt="quote 2">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/quote 3.jpg" class="d-block w-100" alt="quote 3">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <img src="img/quote 4.jpg" class="d-block w-100" alt="quote 4">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  </body>