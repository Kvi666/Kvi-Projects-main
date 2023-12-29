<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kvi Projects</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- animate.css  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <div class="container-md">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white">
      <a href="index.html" class="brand navbar-brand"><img src="img/logo.webp" alt="logo" style="width: 150px;"></a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#items01"><span
          class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse justify-content-center" id="items01">
      <ul class="navbaritems navbar-nav">
          <li class="nav-item active">
            <a href="index.php" class="nav-link">HOME</a>
          </li>
          <li class="nav-item active">
            <a href="services.php" class="nav-link">SERVICES</a>
          </li>
          <li class="nav-item active">
            <a href="portfolio.php" class="nav-link">PORTFOLIO</a>
          </li>
          <li class="nav-item active">
            <a href="about.php" class="nav-link">ABOUT</a>
          </li>
          <li class="nav-item active">
            <a href="contact.php" class="nav-link">CONTACT</a>
          </li>
        </ul>
      </div>
      <a class="btn btn-success justify-content-end d-none d-md-block" href="contact.html">GET STARTED</a>
    </nav>

    <section id="con">
      <div class="row contact mt-5">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 part1">
          <div class="part1-title animate__animated animate__fadeInUp">
            <img src="img/contact.webp" alt="contactwebp" style="width: 300px;">
            <h1>Let's Build Something <span>Great Together</span></h1>
          </div>

          <div class="sub-title lead">
            <p class="animate__animated animate__fadeInUp animate__delay-1s"><i
                class="fa-solid fa-envelope-circle-check"></i> E-mail :
              Kaweeshaprabhathwp@gmail.com</p>
            <p class="animate__animated animate__fadeInUp animate__delay-1s"><i class="fa-solid fa-phone"></i> contact
              no: +94 70 25 85 455
            </p>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 part2 animate__animated animate__fadeInUp">
          <form action="https://formspree.io/f/maygobla" method="POST">
            <fieldset>
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" id="fullName" name="fullName" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="eMail" class="form-label">E-mail</label>
                <input type="text" id="eMail" name="eMail" class="form-control" required>
              </div>
              <div class="mb-3">
                <label for="contactNumber" class="form-label">Contact Number</label>
                <input type="number" id="contactNumber" name="contactNumber" class="form-control" required>
              </div>
              <div class="mb-3 textarea">
                <label for="yourMessage" class="form-label">Your Message</label>
                <textarea type="text" id="yourMessage" name="yourMessage" class="form-control" rows="4" required>
                  </textarea>
              </div>
              <button id="a" type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
          </form>
        </div>
      </div>
    </section>
  </div>
  </div>


  <div class="foootr bg-body-secondary">
    <footer class="py-3">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
          <a href="index.php" class="nav-link px-2 text-body-secondary">Home |</a>
        </li>
        <li class="nav-item">
          <a href="services.php" class="nav-link px-2 text-body-secondary">Services |</a>
        </li>
        <li class="nav-item">
          <a href="portfolio.php" class="nav-link px-2 text-body-secondary">Portfolio |</a>
        </li>
        <li class="nav-item">
          <a href="about.php" class="nav-link px-2 text-body-secondary">About |</a>
        </li>
        <li class="nav-item">
          <a href="contact.php" class="nav-link px-2 text-body-secondary">Contact</a>
        </li>
      </ul>
      <div class="socials justify-content-center">
        <a href="https://web.facebook.com/kaweesha.prabhath.9"><img src="img/facebook.webp" alt="fb" /></a>
        <a href="https://www.instagram.com/kvi69.exe/"><img src="img/instagram.webp" alt="insta" /></a>
        <a href="https://discord.com/channels/@me"><img src="img/discord.webp" alt="dis" /></a>
        <a href="https://github.com/Kvi666"><img src="img/github.webp" alt="git" /></a>
      </div>

      <p class="text-center text-body-secondary">Copyright © 2023 KviProjects. <br>All Rights Reserved</p>
    </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="index.js"></script>
</body>

</html>