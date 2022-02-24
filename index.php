<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $number = $_POST['number'];
  $date = $_POST['date'];

  $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

  if ($insert) {
    $message[] = 'appointment made successfully!';
  } else {
    $message[] = 'appointment failed';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- BootStarp -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

  <!-- Custom Css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Dentist WebSite</title>
</head>

<body>
  <!-- Section Header Start -->
  <header class="header fixed-top">
    <div class="container">
      <div class="row align-items-center justify-content-between">

        <a href="#home" class="logo">dental<span>Care.</span> </a>

        <nav class="nav">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#reviews">Reviews</a>
          <a href="#contact">Contact</a>
        </nav>

        <a href="#contact" class="link-btn">make appointment</a>
        <div id="menu-btn" class="fas fa-bars"></div>
      </div>
    </div>
  </header>
  <!-- Section Header End -->

  <!-- Section Home Start -->
  <section id="home" class="home">
    <div class="container">
      <div class="row min-vh-100 align-items-center">
        <div class="content text-center text-md-left">
          <h3>let us brighten your smile</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias tempora
            voluptatibus.</p>
          <a href="#contact" class="link-btn">make appointment</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Home End -->

  <!-- Section About Start -->
  <section id="about" class="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="image col-md-6">
          <img src="assets/img/about-img.jpg" alt="" class="w-100 mb-4 mb-md-0">
        </div>
        <div class="content col-md-6">
          <span>About Us</span>
          <h3>True Healthcare For Your Family</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus.
            Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam,
            officiis!</p>
          <a href="" class="link-btn">make appointment</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Section About End -->

  <!-- Section Services Start -->
  <section id="services" class="services">

    <h1 class="heading">Our Services</h1>

    <div class="container box-container">
      <div class="box">
        <img src="assets/img/icon-1.svg" alt="">
        <h3>Alignment specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
        <img src="assets/img/icon-2.svg" alt="">
        <h3>Cosmetic dentistry</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
        <img src="assets/img/icon-3.svg" alt="">
        <h3>Oral hygiene experts</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
        <img src="assets/img/icon-4.svg" alt="">
        <h3>Root canal specialist</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
        <img src="assets/img/icon-5.svg" alt="">
        <h3>Live dental advisory</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
        <img src="assets/img/icon-6.svg" alt="">
        <h3>Cavity inspection</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>
    </div>
  </section>
  <!-- Section Services End -->



  <!-- Section Process Start -->

  <section class="process">
    <h1 class="heading">work process</h1>

    <div class="container box-container">
      <div class="box">
        <img src="assets/img/process-1.png" alt="">
        <h3>Cosmetic Dentistry</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
        <img src="assets/img/process-2.png" alt="">
        <h3>Pediatric Dentistry</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
        <img src="assets/img/process-3.png" alt="">
        <h3>Dental Implants</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>
    </div>
  </section>
  <!-- Section Process End -->




  <!-- Section reviews Start -->

  <section id="reviews" class="reviews">
    <h1 class="heading">satisfied clients</h1>

    <div class="container box-container">
      <div class="box">
        <img src="assets/img/pic-1.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id,
          laboriosam asperiores iure omnis alias?</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
      </div>


      <div class="box">
        <img src="assets/img/pic-2.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id,
          laboriosam asperiores iure omnis alias?</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
      </div>

      <div class="box">
        <img src="assets/img/pic-3.png" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id,
          laboriosam asperiores iure omnis alias?</p>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>john deo</h3>
        <span>satisfied client</span>
      </div>
    </div>
  </section>

  <!-- Section reviews End -->



  <!-- Section Contact Start -->
  <section id="contact" class="contact">
    <h1 class="heading">make appointment</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php
      if (isset($message)) {
        foreach ($message as $message) {
          echo '<p class="message">' . $message . '</p>';
        }
      }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>
  </section>
  <!-- Section Contact End -->

  <!-- Section Footer Start -->
  <section class="footer">
    <div class="container box-container">
      <div class="box">
        <i class="fas fa-phone"></i>
        <h3>phone Number</h3>
        <p>0106 728 3755</p>
        <p>0102 488 2245</p>
      </div>

      <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>phone Number</h3>
        <p>Kanat Al Sweis, Dakahlia - 35511</p>
      </div>

      <div class="box">
        <i class="fas fa-clock"></i>
        <h3>opening hours</h3>
        <p>00:04pm to 10:00pm</p>
      </div>

      <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>email address</h3>
        <p>sanekkolodko@freeallapp.com</p>
        <p>zoukinnedeibra-3168@yopmail.com</p>
      </div>
    </div>

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>AHMED (BlueExOo)</span> </div>
  </section>
  <!-- Section Footer End -->
  <!-- Custom JavaScript -->
  <script src="assets/js/main.js"></script>
</body>

</html>