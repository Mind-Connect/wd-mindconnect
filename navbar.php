<style>
  .brand-text {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 1.5rem;
    letter-spacing: 1px;
  }

  @media (max-width: 768px) {
    .brand-text {
      font-size: 1.2rem;
    }
  }

  @media (max-width: 576px) {
    .brand-text {
      font-size: 1rem;
    }
  }

  .navbar-brand img {
    width: 50px;
    height: auto;
    margin-right: 10px;
  }

  @media (max-width: 768px) {
    .navbar-brand img {
      width: 40px;
    }
  }

  @media (max-width: 576px) {
    .navbar-brand img {
      width: 30px;
    }
  }
</style>

<div class="container-fluid shadow fixed-top" style="background:rgb(32, 83, 117);">
  <div class="container-fluid">
    <div class="row">
      <div class="col py-3">
        <div class="d-flex flex-row justify-content-between align-items-center flex-wrap">
          <div class="d-flex flex-row justify-content-start align-items-center">
            <a class="navbar-brand text-white d-flex align-items-center" href="#">
              <img src="img/FINAL.png" alt="Logo">
              <span class="brand-text">Mind Connect</span>
            </a>
          </div>
          <div class="d-flex flex-row justify-content-end align-items-center">
            <ul class="navbar-nav ms-auto d-flex flex-row flex-wrap">
              <li class="nav-item mx-1">
                <a class="nav-link text-white" href="index.php">Home</a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link text-white" href="about.php">About</a>
              </li>
              <li class="nav-item mx-1">
                <a class="nav-link text-white" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
