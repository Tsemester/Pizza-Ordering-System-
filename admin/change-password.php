<?php include('partials/menu.php'); ?>
<div class="main-content">

<div class ="wrapper">

 <h1>Change Password</h1>

</br> </br>

<?php 

if(isset($_GET['id']))

{
$id=$_GET['id'];

}

?>

 <form action="" method="POST">

<table class = " tbladmin" >


<tr>

<td>Current Password </td>
<td>

<input type="password" name="current_password" placeholder="Current Password">

</td>

</tr>
<tr>
<td>New Password</td>
<td>
    <input type="password" name="new_password" placeholder="New Password">
</td>
</tr>
<tr>
<td>Confirm Password </td>
  <td>   
   <input type="password" name="confirm_password" placeholder="Confirm Password">      
</td>


</tr>
<tr>    
  <td colspan="2"  >  
    <input type="hidden" name="id" value= "<?php echo $id ; ?>">   
  <input type="submit" name="submit" value="Change Password" class="btn-secondary">
</td>
</tr>

</table>




</form>



</div>



</div>




<?php
//Check whether the submit button is clicked or not 
 if(isset($_POST['submit']))
 {

    //echo "Clicked" ;

    //1.Get data from the form

    $id=$_POST['id'];
    $current_password=md5($_POST['current_password']);
    $new_password=md5($_POST['new_password']);
    $confirm_password=md5($_POST['confirm_password']);





    //2.Check whether the user exist or not

    $sql="SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

    //Execute The  Query 
    $res=mysqli_query($conn, $sql);
      

    if($res==true)
    {
     //check whether data is available or not 

     $count=mysqli_num_rows($res);

     if($count==1)
     {
         //Check whether users exists 
       //Check whether passwords match or not
        //echo "User Found";
        
       if($new_password==$confirm_password)

       {
       //update password


        //echo "Passwords Match";

        $sql2="UPDATE  tbl_admin SET 
         password='$new_password'
        WHERE id=$id ";

        //Execute the query 
        $res2=mysqli_query($conn, $sql );

        //checking whether the query executed or not 
        if($res2==true)
        {
          //diplay success 

        $_SESSION['password_changed'] = "<div class='success'> Password Changed Successfully.</div>";

        header("location:" . SITEURL . 'admin/manage-admin.php');


        }

        else{
          // display error 

          $_SESSION['password_changed'] = "<div class='error'> Failed To  Change.</div>";

        header("location:" . SITEURL . 'admin/manage-admin.php');


        }


       }

       else{
        // redirect to manage admin 

        

      $_SESSION['passwords_not_match'] = "<div class='error'> Password Dont Match.</div>";

        header("location:" . SITEURL . 'admin/manage-admin.php');

       }
      
          

     }
      else{

        //User does not exist 

     
          $_SESSION['user_not_found'] = "<div class='error'> User Not Found.</div>";

              //redirect to manage admin
                header("location:" . SITEURL . 'admin/manage-admin.php');


      }

    }

    //3.Check Whether the new password and confirm match 

    //4.Change if all of the above is true 



 }


?>


<?php include('partials/footer.php'); ?>