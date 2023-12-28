<?php include('Partials/menu.php'); 
ob_start();

?>


<section class="section about" id="about">


          <!--<div class="about-banner"> -->
          <h2 style="text-align:center; ">Thank You Page</h2>
        <br /> 


            <?php 
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }
            ?>

            <form action="" method="POST" enctype="multipart/form-data">
                    <table class="tbl-30">
                        <tr>

                        <td>name : </td>
                        <td> 
                            <input type="text" name="name" placeholder="Enter Their Name " class="width100" style="color: white; ">

                        </td>
                        </tr>

                        <tr>
                            <td>Review : </td>
                            <td>
                                <textarea name="review" id="" cols="30" rows="5" placeholder="Review For them" class="width100" style="background-color: black; color:white;}"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>Select Image:</td>
                            <td>
                                <input type="file" name="image" class="width100">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <input type="submit" class="btn" name="submit">
                            </td>

                        </tr>
                        <tr>
                            <td>
                            <a href="<?php echo SITEURL; ?>NGO/update.php" >Update Review</a>
            </td>
            </tr>
                        



                    </table>

            </form>
                
            <?php 

            //Check wheather the button is clicked or not
            if(isset($_POST['submit']))
            {
                //Add the Food in Database
                //echo "Clicked";

                //1. Get the data from form
                $name = $_POST['name'];
                $review = $_POST['review'];

                //2. upload the image if selected
                //Check wheather the select image is clicked or not and upload the image only if the image is selected
                if(isset($_FILES['image']['name']))
                {
                    //Get the details of the selected image
                    $image_name = $_FILES['image']['name'];

                    //Check wheather the image is selected or not and upload image onlly if selected
                    if($image_name != "")
                    {
                        //Image is selected
                        // A.Rename the image
                        //Get the extension of selected image (jpg, png, gif, etc) "JOSH-thapa.jpg"  :- vijay-thapa jpg
                        $tmp=explode('.', $image_name);
                        $ext = end($tmp); 

                        //Create New Name for image
                        $image_name = "Food-Name-".rand(0000,9999).".".$ext; //New Image name may be "Food-Name-657.jpg"

                        //b. Upload the image
                        //  Get the src path and destination path

                        // Source path is the current locatin of the image
                        $src=$_FILES['image']['tmp_name'];
                        
                        //Destination path for the image to be uploaded
                        $dst = "../images/review/".$image_name;

                        //Finally upload the food image
                        $upload = move_uploaded_file($src, $dst);

                        //Check wheather the image uploaded or not
                        if($upload==false)
                        {
                            //Failed to upload the image
                            //Redirect to add food page with error message
                            $_SESSION['upload'] = "<div class='error'>Failed to upload image. </div>";
                            header('location:'.SITEURL.'NGO/tqu.php');
                           //Stop the process
                           die(); 
                        }
                    }

                }
                else{
                    $image_name = ""; // Setting default value as blank
                }

                //3. Insert into database

                //Create a sql Query to save or add food
                //For numerical we do not need to pass value inside quotes '' But foe string value it is compulsory to add quote''
                $sql2="INSERT INTO review SET 
                name = '$name',
                review = '$review',
                image_name = '$image_name'
                ";

                //Execute the query
                $res2 = mysqli_query($conn, $sql2);
                //Check wheather data inserted or not
                //4. Redirect the message to manage food page

                if($res2 == true){
                    //Data inserted successfully
                    $_SESSION['add'] = "<div class='success'>Review Added Successfullly. </div>";

                    header('location:'.SITEURL.'NGO/tqu.php');
                    ob_end_flush();
                }
                else{
                    //Failed to insert data
                    $_SESSION['add'] = "<div class='error'>Failed to add Review </div>";
                    header('location:'.SITEURL.'NGO/tqu.php');
                }

                


            }
            
            ?>
        
        
    
            </section>

      




      <?php include('Partials/footer.php'); ?>