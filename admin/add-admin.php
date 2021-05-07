
 <?php include('partials/menu.php'); ?> 




<div class = "main-content ">

<div class = "wrapper">    


<h1>Add Admin </h1>


<br>  </br>

<?php
if(isset($_SESSION['add'])) //  checking if the session is set or not 
{

echo$_SESSION['add'];  // Displaying Session Message
unset($_SESSION['add']); // Removing Session Message 

}
?>

<form action="" method = "POST" >


<table class = " tbladmin" >

<tr>
<td>FullName: </td>
<td><input type="text" name= "full_name" placeholder="Enter Your Name "></td>
</tr>

<tr>
<td>Username: </td>
<td><input type="text" name= "username" placeholder="Enter Your Username "></td>
</tr>

<tr>
<td>Password: </td>
<td><input type="text" name= "password" placeholder="Enter Your Password "></td>
</tr>

<tr>
<td colspan=" 2">
<input type="submit" name = "submit" value="Add Admin" class= "btn-secondary">

</td>

</tr>







</table>





</form>


</div>


</div>



<?php include('partials/footer.php');?> 

<?php 

    //Process Form And Save Into Database
    //check if the form is submitted 

    if(isset($_POST['submit']))
   {
//button  clicked 

//echo "Button Clicked ";

//Get Data From Form 

 $full_name = $_POST['full_name'];
 $username = $_POST['username'];
 $password= md5($_POST['password']); // password ecryption with md5 

// SQL QUERY TO SAVE 

$sql = "INSERT into tbl_admin 
SET
  full_name='$full_name' , 
  username='$username',
  password='$password'
    ";

    //Execute the query 

$res  = mysqli_query($conn , $sql ) or die(mysqli_error());


    //check whether the data is inseted or not 
   

   if($res==TRUE)
   {

    // echo "Inserted Succesfully ";
    // session starts 

  $_SESSION['add'] = "<div class='success'> Admin Added Successfully.</div> ";

  //Redirect page 
  header("location:".SITEURL.'admin/manage-admin.php');

   }

   else 
   {
   // echo "Failed ";

 
    $_SESSION['add'] = "<div class='error'> Admin Added Successfully.</div> ";
   //Redirect page 
   header("location:".SITEURL.'admin/add-admin.php');

   }
   }
?> 