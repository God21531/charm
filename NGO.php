<?php include("config/constants.php"); ?>

<!--home section starts-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authorized By NGO</title>
  

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./css/style.css">

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
        <a href="#" class="logo">From NGO</a>
      </h1>

      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">Wildvine</a>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>
              <span>Home</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>
              <span>About Us</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#service" class="navbar-link" data-nav-link>
              <span>Spread Peace</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#donate" class="navbar-link" data-nav-link>
              <span>Thanks giving</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#event" class="navbar-link" data-nav-link>
              <span>People's Helped Us :)</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-link" data-nav-link>
              <span>Contact</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <div class="header-action">
      
      <a href="<?php echo SITEURL; ?>donate-food.php" class="btn btn-primary">Donate Food <ion-icon name="heart-outline" aria-hidden="true"></ion-icon></a>

          

      </div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <p class="section-subtitle">
            <img src="images/subtitle-img-white.png" width="32" height="7" alt="Wavy line">

            <span>Welcome Good Hearted People's</span>
          </p>

          <h2 class="h1 hero-title">
          Empower Bright Minds for a <strong>Brighter Future!</strong>
          </h2>

          <p class="hero-text">
          <b>Minimize food waste by contributing to those in need! Instead of discarding excess food, consider donating through our trusted website to support NGOs in feeding hungry children. Your generosity can make a significant impact on alleviating hunger and ensuring that no child goes without a meal. Join us in making a positive difference today! </b>
          </p>

          <div class="header-action">
      
      <a href="<?php echo SITEURL; ?>donate-food.php" class="btn btn-primary">Donate Food <ion-icon name="heart-outline" aria-hidden="true"></ion-icon></a>

          

      </div>
        

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features">
        <div class="container">

          <ul class="features-list">

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="shield-checkmark-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Quality Education Sponsorship</h3>

                <p class="item-text">
                  Sit amet consecte adiscine
                  eiusm temor ultrices.
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="water-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Safe Food and Shelter</h3>

                <p class="item-text">
                  Sit amet consecte adiscine
                  eiusm temor ultrices.
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="leaf-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Comunity Development</h3>

                <p class="item-text">
                  Sit amet consecte adiscine
                  eiusm temor ultrices.
                </p>
              </div>
            </li>

            <li class="features-item">
              <div class="item-icon">
                <ion-icon name="snow-outline"></ion-icon>
              </div>

              <div>
                <h3 class="h4 item-title">Enhancing Healthcare Access</h3>

                <p class="item-text">
                  Sit amet consecte adiscine
                  eiusm temor ultrices.
                </p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about">
        <div class="container">

          <div class="about-banner">

            <h2 class="deco-title">About Us</h2>

            <img src="./images/deco-img.png" width="58" height="261" alt="" class="deco-img">

            <div class="banner-row">

              <div class="banner-col">
                <img src="./images/about-banner-1.jpg" width="315" height="380" loading="lazy" alt="Tiger"
                  class="about-img w-100">

                <img src="./images/about-banner-2.jpg" width="386" height="250" loading="lazy" alt="Panda"
                  class="about-img about-img-2 w-100">
              </div>

              <div class="banner-col">
                <img src="./images/about-banner-3.jpg" width="250" height="277" loading="lazy" alt="Elephant"
                  class="about-img about-img-3 w-100">

                <img src="./images/about-banner-4.jpg" width="315" height="380" loading="lazy" alt="Deer"
                  class="about-img w-100">
              </div>

            </div>

          </div>

          <div class="about-content">

            <p class="section-subtitle">
              <img src="./images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

              <span>Why Choose Us</span>
            </p>

            <h2 class="h2 section-title">
              Rise Your Hand to create <strong>a world without hunger :)</strong>
            </h2>

            <ul class="tab-nav">

              <li>
                <button class="tab-btn active">Our Mission</button>
              </li>

              <li>
                <button class="tab-btn">Our Vision</button>
              </li>

              <li>
                <button class="tab-btn">Next Plan</button>
              </li>

            </ul>

            <div class="tab-content">

              <p class="section-text">
                But I must explain to you how all this mistaken denouncing pleasure and praising pain was born and I
                will give you a
                complete account of the system expoundmaster
              </p>

              <ul class="tab-list">

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Charity For Foods</p>
                </li>

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Charity For Education</p>
                </li>

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Charity For Water</p>
                </li>

                <li class="tab-item">
                  <div class="item-icon">
                    <ion-icon name="checkmark-circle"></ion-icon>
                  </div>

                  <p class="tab-text">Charity For Medical</p>
                </li>

              </ul>

              <button class="btn btn-secondary">
                <span>Learn More Us</span>

                <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
              </button>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="section cta">
        <div class="container">

          <div class="cta-content">
            <h2 class="h2 section-title">324+ Trusted Global Partners</h2>
            <h3 class="tab-text">International Initiative for Impact Evaluation (3ie)</h3>
            <h3 class="tab-text">European Union</h3>
            <h3 class="tab-text">Bill and Melinda Gates Foundation</h3>
            <h3 class="tab-text">UNICEF</h3>
            <h3 class="tab-text">Swedish Radio Appeal Board (SRAB)</h3>
            <h3 class="tab-text">Water.org<h3>
            <h3 class="tab-text">Morpho Foundation.......<h3>


            <button class="btn btn-outline">
              <span>Become a Partner</span>

              <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <figure class="cta-banner">
            <img src="./images/cta-banner.jpg" width="520" height="228" loading="lazy" alt="Fox"
              class="img-cover">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" style="background-image: url('./assets/images/service-map.png')">
        <div class="container">

          <p class="section-subtitle">
            <img src="./images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

            <span>What We Do</span>
          </p>

          <h2 class="h2 section-title">
            We Work Differently to <strong> alleviate hunger by:-</strong>
          </h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="leaf-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Food Donation</h3>

                <p class="card-text">
                Minimize food waste by contributing to those in need! Instead of discarding excess food, consider donating through our trusted website to support NGOs in feeding hungry children. 
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="earth-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Clothes Donation</h3>

                <p class="card-text">
                Instead of discarding old and small clothing, consider donating them to brighten the lives of our children and bring them joy.
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="flower-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Book's Donation</h3>

                <p class="card-text">
                As you transition to the next grade as a student, consider contributing to our cause by donating your old books. This gesture will be more beneficial for our children here rather than selling them.
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <h3 class="h3 card-title">Money Donation</h3>

                <p class="card-text">
                  
Your donation plays a crucial role in the growth of our children. By contributing to us, not only will you make a significant impact, but we also express our gratitude by offering a small voucher as a token of appreciation. Your donation is highly valued.
                </p>

                <a href="#" class="btn-link">
                  <span>Read More</span>

                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #DONATE
      -->

      <section class="section donate" id="donate">
        <div class="container">

          <ul class="donate-list">

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./images/donate-1.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Raise Hand For Food Donation</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>                    
      <a href="<?php echo SITEURL; ?>donate-food.php" class="btn btn-secondary">Donate Food <ion-icon name="heart-outline" aria-hidden="true"></ion-icon></a>

                  

                </div>

              </div>
            </li>

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./images/donate-2.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Raise Hand For Clothes Donation</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>

                  <a href="<?php echo SITEURL; ?>donate-food.php" class="btn btn-secondary">Donate Food <ion-icon name="heart-outline" aria-hidden="true"></ion-icon></a>

                </div>

              </div>
            </li>

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./images/donate-3.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Raise Hand For Book's Donation</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>

                  <a href="<?php echo SITEURL; ?>donate-food.php" class="btn btn-secondary">Donate Food <ion-icon name="heart-outline" aria-hidden="true"></ion-icon></a>

                </div>

              </div>
            </li>

            <li>
              <div class="donate-card">

                <figure class="card-banner">
                  <img src="./images/donate-4.jpg" width="520" height="325" loading="lazy" alt="Elephant"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <div class="progress-wrapper">
                    <p class="progress-text">
                      <span>Raised</span>

                      <data value="256">$256</data>
                    </p>

                    <data class="progress-value" value="83">83%</data>
                  </div>

                  <div class="progress-box">
                    <div class="progress"></div>
                  </div>

                  <h3 class="h3 card-title">Money Donation</h3>

                  <div class="card-wrapper">

                    <p class="card-wrapper-text">
                      <span>Goal</span>

                      <data class="green" value="34562">$34562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>Raise</span>

                      <data class="yellow" value="562">$562</data>
                    </p>

                    <p class="card-wrapper-text">
                      <span>To Go</span>

                      <data class="cyan" value="864">$864</data>
                    </p>

                  </div>

                  <a href="<?php echo SITEURL; ?>donate-food.php" class="btn btn-secondary">Donate Food <ion-icon name="heart-outline" aria-hidden="true"></ion-icon></a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS -->
        
        <section class="testi">

<div class="testi-content">
<p class="section-subtitle">

<?php 
$sql = "SELECT * FROM review ORDER BY id DESC LIMIT 1";
$res=mysqli_query($conn, $sql);
$count=mysqli_num_rows($res);
if($count>0){
  while($row=mysqli_fetch_assoc($res)){
    $id=$row['id'];
    $name=$row['name'];
    $review=$row['review'];
    $image_name=$row['image_name'];

    ?>
    
         
    <?php
    if($image_name==""){
      echo "<div class='error'>Image not Available</div>";
    }
    else{
      ?>
    
      

    <img src="./images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

<span>Our Testimonials</span>
</p>

<h2 class="h2 section-title">
What People Say About <strong>Our Organization</strong>
</h2>
          <div class="testi-card">

            <figure class="card-avatar">
              <img src="<?php echo SITEURL; ?>images/review/<?php echo $image_name; ?>" width="60" height="60" loading="lazy" alt="Trisha">
            </figure>

            <div>
              <blockquote class="testi-text">
              <?php echo $review; ?>
              </blockquote>

              <h3 class="testi-name">Thank You :-</h3>

              <p class="testi-title"><?php echo $name; ?></p>
            </div>

          </div>

       

      
   


<?php
    }

?>

<?php
  }
}
else{
  echo"<div class='error'>No review Added. </div>";
}
?>
 </div>

<figure class="testi-banner">
<!--width="960" height="846" loading="lazy" -->
      <?php if($id>0){include('./slideshow.php');} ?>
</figure>


</section>


<!--review section ends-->






      <!-- 
        - #PARTNER
      -->

      <section class="section partner">
        <div class="container">

          <a href="#" class="partner-logo">
            <img src="./images/partner-1.png" width="157" height="55" loading="lazy" alt="Children Fund"
              class="gray">

            <img src="./images/partner-1-active.png" width="157" height="55" loading="lazy" alt="Children Fund"
              class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./images/partner-2.png" width="163" height="55" loading="lazy" alt="Non Profit Agency"
              class="gray">

            <img src="./images/partner-2-active.png" width="163" height="55" loading="lazy"
              alt="Non Profit Agency" class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./images/partner-3.png" width="149" height="55" loading="lazy" alt="Rise Hand Help Us"
              class="gray">

            <img src="./images/partner-3-active.png" width="149" height="55" loading="lazy"
              alt="Rise Hand Help Us" class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./images/partner-4.png" width="169" height="58" loading="lazy" alt="Helping" class="gray">

            <img src="./images/partner-4-active.png" width="169" height="58" loading="lazy" alt="Helping"
              class="color">
          </a>

          <a href="#" class="partner-logo">
            <img src="./images/partner-5.png" width="211" height="55" loading="lazy" alt="Poor Fund Organization"
              class="gray">

            <img src="./images/partner-5-active.png" width="211" height="55" loading="lazy"
              alt="Poor Fund Organization" class="color">
          </a>

        </div>
      </section>





      <!-- 
        - #EVENT
      -->
      <section class="section event" id="event">
        <div class="container">
        <p class="section-subtitle">
            <img src="./images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">

            <span>Event & Program</span>

            <img src="./images/subtitle-img-green.png" width="32" height="7" alt="Wavy line">
          </p>

          <h2 class="h2 section-title">
            Our Most Popular Causes For <strong>Building Fund</strong>
          </h2>

      <?php 
$sql2 = "SELECT * FROM needs ORDER BY id DESC LIMIT 3";
$res2=mysqli_query($conn, $sql2);
$count=mysqli_num_rows($res2);
if($count>0){
  while($row=mysqli_fetch_assoc($res2)){
    $id=$row['id'];
    $day=$row['day'];
    $name=$row['name'];
    $location=$row['location'];
    $needs=$row['needs'];

    ?>
<?php
$timestamp = strtotime($day);
?>
    
    <ul class="event-list">

<li>
  <div class="event-card">

    <time class="card-time" datetime="01-05">
      <span class="month"><?php echo date("M", $timestamp); ?></span>

      <span class="date"><?php echo date("d", $timestamp); ?></</span>
    </time>

    <div class="wrapper">

      <div class="card-content">
        <p class="card-subtitle"><?php echo $name; ?></p>

        <h3 class="card-title"><?php echo $needs; ?></h3>

        <p class="card-text">
        <?php echo $location; ?>
        </p>
      </div>

      <button class="btn btn-black">
        <span>More About Our trust</span>

        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
      </button>

    </div>

  </div>
</li>
    
         
   

<?php
  }
}
else{
  echo"<div class='error'>No review Added. </div>";
}
?>


          </ul>

          <button class="btn btn-secondary">
            <span>Learn More Us</span>

            <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>
      </section>





      <!-- 
        - #INSTA POST
      -->

      <section class="insta-post">

        <ul class="insta-post-list">

          <li class="insta-post-item">
            <a href="https://www.instagram.com/charitywater/" class="insta-post-link" target="_blank">
              <img src="./images/raw.gif" width="320" height="300" loading="lazy" alt="Lion "
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="https://www.instagram.com/wckitchen/" class="insta-post-link" target="_blank">
              <img src="./images/raw2.png" width="320" height="300" loading="lazy" alt="Deer"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="https://www.instagram.com/pencilsofpromise/" class="insta-post-link"  target="_blank">
              <img src="./images/raw4.png" width="320" height="300" loading="lazy" alt="Wild Bear"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="https://www.instagram.com/lifesongfororphans/?hl=en" class="insta-post-link" target="_blank">
              <img src="./images/raw5.png" width="320" height="300" loading="lazy" alt="Deer"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="https://www.instagram.com/hopeandhomesforchildren/" class="insta-post-link" target="_blank">
              <img src="./images/raw9.gif" width="320" height="300" loading="lazy" alt="Horses"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <ul class="footer-list">

        <li>
          <a href="#" class="footer-link">Terms of use</a>
        </li>

        <li>
          <a href="#" class="footer-link">Privacy & Policy</a>
        </li>

      </ul>

      <p class="copyright">
        Copyright 2022 <a href="#" class="copyright-link">codewithsadee</a>. All Rights Reserved.
      </p>

    </div>
  </footer>





  <!-- 
    - custom js link
  -->
  <script src="js/ngo.js"></script> 

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 

</body>

</html>
<!--home section ends-->
