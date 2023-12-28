<?php include('Partials/menu.php'); 
ob_start();

?>


<section class="section about" id="about">


          <!--<div class="about-banner"> -->
          <h2 style="text-align:center; ">Emergency Needs Page</h2>
        <br /> 


            <?php 
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
            ?>

            <form action="" method="POST" enctype="multipart/form-data">
                    <table class="tbl-30">
                    <tr>

                        <td>Date : </td>
                        <td> 
                            <input type="date" name="day" class="width100" style="color: white; ">

                        </td>
                        </tr>    
                    <tr>

                        <td>Trust Name : </td>
                        <td> 
                            <input type="text" name="name" placeholder="Your Name??" class="width100" style="color: white; ">

                        </td>
                        </tr>

                        <tr>
                            <td>Location with Contact No : </td>
                            <td>
                                <textarea name="location" id="" cols="30" rows="5" placeholder="Your Location??" class="width100" style="background-color: black; color:white;}"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>Enter Your Needs:</td>
                            <td>
                            <textarea name="needs" id="" cols="30" rows="5" placeholder="Your Needs??" class="width100" style="background-color: black; color:white;}"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <input type="submit" class="btn" name="submit">
                            </td>

                        </tr>
                        <tr>
                            <td>
                            <a href="<?php echo SITEURL; ?>NGO/update-needs.php" >Update Needs</a>
            </td>
            </tr>
                        



                    </table>

            </form>
             
<?php 
     //process the value from and save it in database
     //check wheather the submit button is clicked or not

     if(isset($_POST['submit']))
     {
        //Button clicked
        //echo "Button clicked";

        //1.Get the data from form
        $day=$_POST['day'];
         $name = $_POST['name'];
         $location = $_POST['location'];
         $needs = $_POST['needs']; //Password encryption with md5

         //2.SQL Query to save the data into the database
         $sql = "INSERT INTO needs SET
            day='$day',
            name='$name',
            location='$location',
            needs='$needs'
         ";

         //3. Execute query and save data into database
         

         $res = mysqli_query($conn, $sql) or die(mysqli_error());

         //4.check wheather the (query is executed) data is inserted or not
         if($res==TRUE)
         {
            //DATA INSERTED
            //echo "Data inserted";
            //create a session variable to display message
            $_SESSION['add'] = "<div class='success'>Admin added successfully </div>";
            //Redirect page to manage Admin
            header("location:" .SITEURL.'NGO/ends.php');
            
         }
         else{
            //FAILDED TO INSERT DATA
            //echo "Failed to inser data";
            //create a session variable to display message
            $_SESSION['add'] = "Failed to add Admin";
            //Redirect page to Add Admin
            header("location:" .SITEURL.'NGO/ends.php');
         }
     }
?>
    
            </section>

      




      <?php include('Partials/footer.php'); ?>