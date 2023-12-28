<?php include('partials-front/menu.php'); 
ob_start();
?>

<div class="back">
<!--order section starts-->
<section class="order" id="order">



    <h3 class="sub-heading">You are a Good Person :)</h3> 
    <h1 class="heading"> Fill to Donate</h1>

    <?php 
            if(isset($_SESSION['add'])) //checking wheather the session is set or not
            {
                echo $_SESSION['add']; //Display the session message if set
                unset($_SESSION['add']); //Remove session message
            }
        ?>

    <form action="info.php" method="POST">
    <div class="inputBox">
    <div class="input">
        <span>Your name</span>
        <input type="text" placeholder="enter your name" name="name" id="name">
    </div>

    <div class="input">
        <span>Your Phone Number</span>
        <input type="number" placeholder="enter your number" name="phno" id="phno">
    </div>
    </div>
    <div class="inputBox">
    <div class="input">
        <span>Your Current Address</span>
        <input name="address" id="address" placeholder="enter your address" >
    </div>
    <div class="input">
        <span>date and time </span>
        <input type="datetime-local" name="date" id="date">
    </div>
    </div>
    <div class="inputBox">
    <div class="input">
        <span> food quantity</span>
        <textarea type="text" placeholder="enter food name(quantity)" name="much" id="much"></textarea>
    </div>
    <div class="input">
        <span>Your message for childrens</span>
       <textarea type="text" placeholder="enter your message" id="msg" name="msg"></textarea>
    </div>
</div>
<div class="inputBox">
    <div class="input">
        <span>Will you personally contribute by distributing food?</span>
        <input type="radio" name="active" value="Yes"> <span>Yes</span>
        <input type="radio" name="active" value="No"> <span>No</span>
      </div>
      <div class="input">
        <?php 
          if(isset($_SESSION['done'])) //checking wheather the session is set or not
          {
              echo $_SESSION['done']; //Display the session message if set
              unset($_SESSION['done']); //Remove session message
          }
      
        ?>
      </div>

    
</div>
        
<input type="submit" class="btn" name="submit">

   </form> 

    
    
    

</section>
        </div>
<!--order section ends-->

<?php include('partials-front/footer.php'); ?>