<?php 

include('../config/constants.php');
include('login-check.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NGO page</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./css/ngo.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@300;400;500;700&family=Oswald:wght@600&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="#" class="logo">NGO Admin</a>
      </h1>

      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">NGO Admin</a>

        <ul class="navbar-list">

          <li>
            <a href="fds.php" class="navbar-link" title="Food Donation Status" data-nav-link>
              <span>FDS</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="tqu.php" class="navbar-link" title="Thanks giving upload" data-nav-link>
              <span>TQU</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="ends.php" class="navbar-link" title="Emergency Needs Page" data-nav-link>
              <span>ENDS</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <div class="header-action">

        <button class="btn btn-primary" id="demo">
          <script>
document.getElementById("demo").onmouseover = function() {mouseOver()};
document.getElementById("demo").onmouseout = function() {mouseOut()};

function mouseOver() {
  document.getElementById("demo").innerHTML = "+91 7358503502"
}

function mouseOut() {
  document.getElementById("demo").innerHTML = "CONTACT US";
}
</script>

          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </button>

        

      </div>

    </div>
  </header>





  <main>
    <article>