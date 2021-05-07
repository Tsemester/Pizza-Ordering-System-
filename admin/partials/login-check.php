<?php  


//authorization -access control



// to check whether the user is logged in or not 
  if(!isset($_SESSION['user']))
  
  {
  //user is not logged in 


  //redirect to loign page 

  $_SESSION['no_login_message']= "<div class = 'error text-center'> Please Login To Access Admin Panel </div> ";


    header("location:" . SITEURL . 'admin/login.php');
  
  }


?>