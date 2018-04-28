<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/css/style.css">
    <!-- <script src="sript.js"></script> -->
    <link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/js/all.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js">
    <title>Aspiring Web Developer</title>
  </head>
  <!-- <div id="root"></div> -->
  <body>
    <div class="navbar-fixed">
      <nav class="black">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo">Aspiring Web Developer</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
             <ul class="right hide-on-med-and-down">
              <li>
                <a href="#home">About</a>
              </li>
              <li>
                <a href="#popular">Portfolio</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
      <li>
        <a href="#home">About</a>
      </li>
      <li>
        <a href="#popular">Portfolio</a>
      </li>
      <li>
        <a href="#contact">Contact</a>
      </li>
    </ul>
  
    <!-- Section: Slider -->
    <section class="slider">
    </section>
  
    <!-- Section: Portfolio -->
    <section id="popular" class="section section-popular scrollspy">
      <div class="container">
        <div class="row">
          <h4 class="center">
            <span class="gray-text">Portfolio</span> Projects</h4>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                <span class="card-title">Cancun, Mexico</span>
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                  delectus?
                </p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
                <span class="card-title">The Bahamas</span>
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                  delectus?
                </p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
                <span class="card-title">Nova Scotia</span>
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                  delectus?
                </p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                <span class="card-title">Cancun, Mexico</span>
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                  delectus?
                </p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                <span class="card-title">Cancun, Mexico</span>
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                  delectus?
                </p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                <span class="card-title">Cancun, Mexico</span>
              </div>
              <div class="card-content">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                  delectus?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
        <!-- Section: Icon Boxes -->
        <section class="section section-icons grey lighten-4 center">
          <div class="container">
            <div class="row">
              <div class="col s12 m4">
                <div class="card-panel">
                  <i class="material-icons large black-text">room</i>
                  <h4>Lorem ipsum </h4>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, velit.</p>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="card-panel">
                  <i class="material-icons large black-text">store</i>
                  <h4>Lorem ipsum </h4>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, velit.</p>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="card-panel">
                  <i class="material-icons large black-text">airplanemode_active</i>
                  <h4>Lorem ipsum </h4>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, velit.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php include('src/php/form_process.php'); ?>
    <!-- Section: Contact -->
    <section id="contact" class="section section-contact scrollspy">
      <div class="container">
        <div class="row">
            <div class="card-panel grey lighten-3">
              <h5>For business inquiries, please fill out this form:</h5>
              <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="input-field">
                <input type="text" placeholder="Name" id="name" name="name">
                <label for="name"></label>
                <span class="error"><?= $name_error?></span>
              </div>
              <div class="input-field">
                <input type="text" placeholder="Email" id="email" name="email">
                <label for="email"></label>
                <span class="error"><?= $email_error?></span>
              </div>
              <div class="input-field">
                <input type="text" placeholder="Phone" id="phone" name="phone">
                <label for="phone"></label>
                <span class="error"><?= $phone_error?></span>
              </div>
              <div class="input-field">
                <textarea class="materialize-textarea" placeholder="Enter Message" id="message" name="message" type="text"></textarea>
                <label for="message"></label>
                <span class="error"><?= $message_error?></span>
              </div>
              <input style="background-color: black;" type="submit" value="Submit" class="btn">
              <div class="success">should be here: <?= $success; ?></div>
              </form>
            </div>
        </div>
      </div>
    </section>
  
    <!-- Footer -->
    <footer class="section black darken-2 white-text center">
      <p class="flow-text">Alexandros Kourtis &copy; 2018</p>
    </footer>
  </body>
</html>
