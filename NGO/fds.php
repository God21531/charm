<?php include('Partials/menu.php'); ?>


<section class="section about" id="about">


          <div class="about-banner">
          <h2 style="text-align:center; ">Food Donation Status</h2>
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
                <th>Phno</th>
                <th>Address</th>
                <th>Remaining Food</th>
                <th>Date</th>
                <th>Active</th>
                <th>Message</th>
        
            </tr>


            <?php
                //Query to get all admin
                $sql = "SELECT * FROM ngo_info";
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
                            $phno = $rows['phno'];
                            $address=$rows['address'];
                            $date=$rows['date'];
                            $much=$rows['much'];
                            $active = $rows['active'];
                            $msg=$rows['msg'];
                            
                                //display thee values in our table
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $phno; ?></td>
                                        <td><?php echo $address; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $much; ?></td>
                                        <td><?php echo $active; ?></td>
                                        <td><?php echo $msg; ?></td>
                                        
                                        <td>
                                            <a href="<?php echo SITEURL; ?>NGO/delete-ngo.php? id=<?php echo $id; ?>" class="btn-danger">Delete</a>

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
        
        
        </div>
    
            </section>

      




      <?php include('Partials/footer.php'); ?>