<?php 
    
    //include constants.php file here
    include('../config/constants.php');

    // 1.get the ID to be deleted
     $id = $_GET['id'];
    //2. Create sql query to delete admin
    $sql = "DELETE FROM needs WHERE id=$id";

    //Execute the querry
    $res = mysqli_query($conn, $sql);

    //check wheather the query executed successfully or not
    if($res==true)
    {
        //Query executed successfully
        //echo "admin deleted";
        //create session variable to display message
        $_SESSION['delete'] = "<div class='success'>Needs deleted successfully. </div>";
        //Redirect to manage admin page
        header('location:'.SITEURL.'NGO/update-needs.php');
    }
    else
    {
        //Failed to delete admin
        //echo "failed to delete";

        $_SESSION['delete'] = "<div class='error'>Failed to delete Needs, try again later. </div>";
        header('location:'.SITEURL.'NGO/update-needs.php');

    }
    //3. redirect to manage admin page with message
?>
