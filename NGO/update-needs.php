<?php include('Partials/menu.php'); ?>


<section class="section about" id="about">


          <h2 style="text-align:center; ">Needs Status</h2>
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
                <th>DATE</th>
                <th>TRUST NAME</th>
                <th>LOCATION</th>
                <th>NEEDS</th>
        
            </tr>


            <?php
                //Query to get all admin
                $sql = "SELECT * FROM needs";
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
                            $day=$rows['day'];
                            $name = $rows['name'];
                            $location = $rows['location'];
                            $needs=$rows['needs'];
                                //display thee values in our table
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?></td>
                                        <td><?php echo $day; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $location; ?></td>
                                        <td><?php echo $needs; ?></td>
                                        
                                        <td>
                                            <a href="<?php echo SITEURL; ?>NGO/delete-ends.php? id=<?php echo $id; ?>">Delete</a>

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