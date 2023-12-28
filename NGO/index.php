<?php include('Partials/menu.php'); ?>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
      <div class="container">

          <p class="section-subtitle">
            <img src="./assets/images/subtitle-img-white.png" width="32" height="7" alt="Wavy line">

            <span>Welcome Sir/ Madam</span>
          </p>

          <h2 class="h1 hero-title">
          Everyone can help <strong>Someone.</strong>
          </h2>

          <p class="hero-text">
          <div class="main-content">
    <div class="wrapper">
        <h1>Dashboard</h1>
        <br><br>
        <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>
            <br><br>
        <div class="col-4 text-center">

        <?php 
            //Sql Query
            $sql = "SELECT * FROM tbl_category";
            //Execute query
            $res = mysqli_query($conn, $sql);
            //Count rows
            $count = mysqli_num_rows($res);
        ?>
            <h1><?php echo $count;?></h1>
            <br />
            Categories
        </div>

        <div class="col-4 text-center">

        <?php 
            //Sql Query
            $sql2 = "SELECT * FROM tbl_category";
            //Execute query
            $res2 = mysqli_query($conn, $sql2);
            //Count rows
            $count2 = mysqli_num_rows($res2);
        ?>
            <h1><?php echo $count2; ?></h1>
            <br />
            Foods
        </div>

        <div class="col-4 text-center">
        <?php 
            //Sql Query
            $sql3 = "SELECT * FROM tbl_category";
            //Execute query
            $res3 = mysqli_query($conn, $sql3);
            //Count rows
            $count3 = mysqli_num_rows($res3);
        ?>
            <h1><?php echo $count3; ?></h1>
            <br />
            Total Orders
        </div>

        <div class="col-4 text-center">
            
        <?php 
           // Create sql query to get total revenue generated
           //Aggregate function in sql
           $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";

           //Execute the query
           $res4 = mysqli_query($conn, $sql4);

           //Get the value
           $row4 = mysqli_fetch_assoc($res4);
           //Get the total revenue 
           $total_revenue = $row4['Total'];
        
        ?>
            <h1><?php echo $total_revenue; ?></h1>
            <br />
            Revenue Generated
        </div>

        <div class="clearfix"></div>

        
        </div>
    </div>
    <!--Main content section ends-->
          </p>

          <button class="btn btn-primary">
            <span>Donation</span>

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
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-1.jpg" width="320" height="300" loading="lazy" alt="Lion"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-2.jpg" width="320" height="300" loading="lazy" alt="Deer"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-3.jpg" width="320" height="300" loading="lazy" alt="Wild Bear"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-4.jpg" width="320" height="300" loading="lazy" alt="Deer"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li class="insta-post-item">
            <a href="#" class="insta-post-link">
              <img src="./assets/images/insta-5.jpg" width="320" height="300" loading="lazy" alt="Horses"
                class="img-cover">

              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </section>

    </article>
  </main>

  <?php include('Partials/footer.php'); ?>





