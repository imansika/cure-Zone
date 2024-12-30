<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Cure-Zone</title>


  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



  <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-info"></span> +34 2456722456</a>
              <span class="divider">|</span>
              <a href="#"><i class="bi bi-envelope"></i></span>  curezone@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><i class="bi bi-facebook"></i></span></a>
              <a href="#"><i class="bi bi-twitter"></i></span></a>
              <a href="#"><i class="bi bi-whatsapp"></i></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-info">Cure</span>-Zone</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search text-info"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/category">My Appointment</a>
            </li>

            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
              <a class="btn btn-info ml-lg-3" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-info ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn btn-info ml-lg-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_3.png);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Seamless Health-Happier Lives</span><br><br>
        <p><a href="/category/create" class="btn btn-info">Make Appoinment</a></p>
      </div>
    </div>
  </div>


  <div class="page-section pb-0">
    <div class="container">
      <div class="row align-items-center">
        
        <div class="col-lg-6" >
          <div class="img-place custom-img-1">
            <img src="../assets/img/home-doctor.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 py-3 ">
          <h1>Welcome To Cure-Zone Health Center</h1>
          <p class="text-grey mb-4">Your health is our priority. At Cure-Zone, we are dedicated to providing compassionate care, cutting-edge medical solutions, and a patient-centered approach to ensure your well-being. Our team of skilled professionals is committed to creating a safe and healing environment for every individual.

            Explore a new era of healthcare with us, where advanced technology meets heartfelt care. Together, we’ll help you achieve a healthier, happier life. Welcome to Cure-Zone—where healing begins!</p>

        </div>
      </div>
    </div>
  </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
  
          <p class="footer-link mt-2">2nd Lane , Colombo</p>
          <a href="#" class="footer-link">+34 2456722456</a>
          <a href="#" class="footer-link">curezone@gmail.com</a>

        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" ><i class="bi bi-facebook"></i></a>
            <a href="#" ><i class="bi bi-twitter"></i></a>
            <a href="#" ><i class="bi bi-google"></i></a>
            <a href="#" ><i class="bi bi-instagram"></i></a>
            <a href="#" ><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

     <hr>
    </div>
  </footer>

  

</body>

</html>