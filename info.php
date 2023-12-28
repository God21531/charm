<?php 
include('config/constants.php');
if(isset($_POST['submit']))
{
   $name = $_POST['name'];
   $phno = $_POST['phno'];
   $address=$_POST['address'];
   $date=$_POST['date'];
   $much=$_POST['much'];
   if(isset($_POST['active']))
   {
       $active = $_POST['active'];
   }
   else{
       $active = "No"; //Setting Default Value
   }
   $msg=$_POST['msg'];

   

   $sql="INSERT INTO ngo_info SET 
    name='$name',
    phno='$phno',
    address='$address',
    date='$date',
    much='$much',
    active='$active',
    msg='$msg'
    
   ";

   $res = mysqli_query($conn, $sql);
   if($res==true){
      $_SESSION['add'] = "<div class='success'>Register Successfully. </div>";

      header('location:'.SITEURL.'donate-food.php');
      ob_end_flush();
   }
   else{
      $_SESSION['add']="<div class='error'>Registration Incomplete</div>";
      header('location:'.SITEURL.'donate-food.php');

   }
}
?>

<?php 
$sql2= "SELECT active FROM ngo_info ORDER BY id DESC LIMIT 1 ";
$res2= mysqli_query($conn, $sql2);
$count = mysqli_num_rows($res2);
if($count>0){
   while($row2=mysqli_fetch_assoc($res2)){
      $active2=$row2['active'];
      if($active2=='Yes'){
         $_SESSION['done'] = "<div class='done'>You Are Always Welcome, For location details Contact :- <h3 class='number'>+91 7358503502</h3> </div>";
         header('location:'.SITEURL.'donate-food.php');
      ob_end_flush();
      }
      else{
         $_SESSION['done']= "<div class='done'>No worries! Our team will contact you shortly, and rest assured, your contribution will help feed numerous hungry stomachs.</div>";
         header('location:'.SITEURL.'donate-food.php');
      }
   }
}

?>
