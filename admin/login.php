


<?php include('./config/constants.php'); ?> 
<html>

<head>


<title>Pizza Ordering System </title>
<link rel="stylesheet" href="../css/admin.css">


 <style>
body{
   background-image:url(../images/board3.jpg);

   
}

 </style>


</head>


<body >
    
<div class="login" style="  background-color:#636e72;">
<h1 class="text-center" style="color: white;">Login</h1>
<br><br>

<?php  
if(isset($_SESSION['login']))
{

    echo $_SESSION['login'];
    unset($_SESSION['login']);
}


if(isset($_SESSION['no_login_message']))
{

    echo $_SESSION['no_login_message'];
    unset($_SESSION['no_login_message']);
}


 


?>
<br><br>

<!--- login form starts here --->

<form action="" method = "POST" class="text-center" style="color: white;" >


           Username:
           
<input type="text" name="username" placeholder="Enter Your Username"  > <br><br>


Password:
<input type="text" name="password" placeholder="Enter Your Password"> <br><br>

<input type="submit" name="submit" value="Login" class="btn-primary">
<!--- login form ends here --->

     

<br><br>
</form>
<p class ="text-center" style="color: white;"> Created By <a href="www.runtimeterror.bw" style="color: #ffa502;">Runtime Terror</a> </p>

</div>


</body>





</html>

<?php

//check whether the button is clicked

if(isset($_POST['submit']))
{

    ///process 
    //get data from form
   $username=$_POST['username'];
   $password=md5($_POST['password']);

   //SQL to check 
   $sql= "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'" ;

   //Execute SQL

   $res=mysqli_query($conn,$sql);

   //count rows

   $count=mysqli_num_rows($res);

   if($count==1)
{
      
       //user available and succes login 
       $_SESSION['login']="<div class ='success'>Login Successful<?div>";
       


         $_SESSION['user']=$username; // to check whether the user is logged in or not 
      // redirect to homepage dashboard 
      header("location:" . SITEURL . 'admin/');
}
    
else{

      //user available and succes login 
       $_SESSION['login']="<div class ='error text-center'>Login Error<?div>";
      // redirect to homepage dashboard 
      header("location:" . SITEURL . 'admin/login.php');

    //user not available login failure 
}

}

?>