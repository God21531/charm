<?php include('Partials/menu.php'); ?>


<section class="section about" id="about">


          <h2 style="text-align:center; ">Review Status</h2>
        <br /> 

        <?php 
        if(isset($_SESSION['delete']))
        {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
        }
            ?>
    <br><br><br>
        
        <!--Button to add admin-->

        <table class="tbl-full">
            <tr> 
                <th>S.N</th> 
                <th>NAME</th>
                <th>REVIEW</th>
                <th>Image</th>
        
            </tr>


            <?php
                //Query to get all admin
                $sql = "SELECT * FROM review";
                //Execute the query
                $res = mysqli_query($conn, $sql);

                //Check wheather the query is executed or not

                if($res==TRUE)
                {
                    //count rows to check wheather we have data in database or not
                    $count = mysqli_num_rows($res);//function to get all rows in database

                    $sn=1; //create a variable  and assign the value
                    
                    //Check the num of rows
                    if($count>0)
                    {
                         //WE HAVE DATA IN DATABASE
                         while($rows=mysqli_fetch_assoc($res))
                         {
                            //using while loop to get all data from database.
                            //and while loop will run as long as we have data in database

                            //Get individual data
                            $id=$rows['id'];
                            $name = $rows['name'];
                            $review = $rows['review'];
                            $image=$rows['image_name'];
                                //display thee values in our table
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $review ?></td>
                                        <td><?php echo $image; ?></td>
                                        
                                        <td>
                                            <a href="<?php echo SITEURL; ?>NGO/delete-tqu.php? id=<?php echo $id; ?>">Delete</a>

                                        </td>
                                    </tr>    
                                
                                <?php
                         }
                    }
                    else{
                        //WE DO NOT HAVE DATA IN DATABASE
                    }
                }
            ?>

               
        </table>
        
    
    
            </section>

      




      <?php include('Partials/footer.php'); ?>