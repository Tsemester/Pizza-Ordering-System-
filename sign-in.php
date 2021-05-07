
<?php include ('Partials-Front/menu.php'); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Pizzeria</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/sign-style.css">
</head>
<body class="form-v8">
<div>

<?php

 
if(isset($_SESSION['login']))
{

    echo $_SESSION['login'];
    unset($_SESSION['login']);
}


if(isset($_SESSION['create']))
{

    echo $_SESSION['create'];
    unset($_SESSION['create']);
}


 


?>




<?php

if(isset($_POST['register']))
{

$username=$_POST['username'];

$email=$_POST['email'];

$password=md5($_POST['password']);

$full_names=$_POST['full_names'];



$sql = "INSERT into customer
SET
  email='$email' , 
  username='$username',
  password='$password',
  full_names='$full_names'
    ";

    //Execute the query 

$res  = mysqli_query($conn , $sql )  or die(mysqli_error()); 


   if($res==TRUE)
   {

    // echo "Inserted Succesfully ";
    // session starts 

  $_SESSION['create'] = "<div class='success'> Account Created  Successfully Please Login .</div> ";

  //Redirect page 

      header('location:' . 'sign-in.php');

   }

   else 
   {
   // echo "Failed ";

 
    $_SESSION['create'] = "<div class='error'> Failed To Create Account  Try Again .</div> ";
   //Redirect page 
   
 header('location:' . SITEURL.'sign-up.php');

   }
   }





?>

<?php 

if(isset($_POST['signin']))
{

    ///process 
	error_reporting(0); 
    //get data from form
   $username=$_POST['username'];
   $password=$_POST['password'];

	if(!empty($_POST["signin"]))   		//if records were not empty
  {

   //SQL to check 
   $sql2= "SELECT * FROM customer WHERE username='$username' && password='".md5($password)."'" ;

   //Execute SQL

   $res2=mysqli_query($conn,$sql2);


		$row2=mysqli_fetch_array($res2);
	
	    if(is_array($row2))  //if matching records in the array & if everything is right
			{
        $_SESSION["user_id"] = $row2['username']; //put user id into temp session
        $_SESSION['success'] = "You are now logged in";
        header("location: myorders.php");// redirect to index.php page
	    } 
		  else
      {
        $message = "Invalid , Username or Password!"; //throw error
      }
	}
}
?>







</div>
	<div class="page-content" style="background-image:url(images/board3.jpg);">
		<div class="form-v8-content " >
			<div class="form-left">
				<img src="images/pizza.jpg" alt="menu" height=" 99.5%">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
					</div>
					
				</div>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign-up">

					
                     
					 	<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="full_names" id="full_names" class="input-text" required>
								<span class="label">Full Names</span>
		  						<span class="border"></span>
							</label>
						</div>

						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="username" id="username" class="input-text" required>
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="email" id="your_email" class="input-text" required>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Register">
						</div>
					</div>
				</form>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="username" id="username" class="input-text" required>
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
					<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						
						
						<div class="form-row-last">
							<input type="submit" name="signin" class="register" value="Sign In">
						</div>
						<h5 style="color: red;"> <a style="color :red" href="<?php echo SITEURL;?>admin/index.php">Sign In As Admin </a></h5>

							
					
					</div>
					
				</form>
			</div>
		</div>
	</div>
      
<!--Navigation Bar-->
<!-- 
<nav class="navbar navbar-expand-lg">
    <a href="index.php" class="navbar-brand text-uppercase primary-color">La Cuisine</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
        <div class="toggler-btn">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
        </div>
    </button> 
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav mx-auto head-text">
            <?php
            if(!empty($_SESSION["user_id"])) 
            {
              echo '<li><a href="myorders.php" class="btn nav-btn text-capitalize">My_Orders</a></li>';
            }
            ?>            
        </ul>
    <form class="form-inline d-none d-lg-block mr-5">
        <ul class="navbar-nav mx-auto">
          <li><a href="index.php" class="btn nav-btn text-capitalize">UB Pizzeria</a></li>
            <?php
            if(empty($_SESSION["user_id"])) 
            {
              // if user is not login
              echo '<li><a href="sign-in.php" class="btn nav-btn text-capitalize">login/signup</a></li>';
            }
            else
            {
              //if user is login
              echo '<li"><a href="logout.php" class="btn nav-btn text-capitalize">logout</a></li>';
            }
            ?>            
        </ul>
    </form>
    </div>
</nav>

--->
 

<!--End of Navigation Bar-->


<!------------------------------------------------------------------------------------------------------------->

<!-- JQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
<!-- Magnific Popup -->
    <script src="magnific-popup/jquery.magnific-popup.js"></script>
<!-- Ripple Effect -->
    <script src="js/jquery.ripples-min.js"></script>
<!-- JavaScript -->
   <script src="js/script.js"></script>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>















	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body>
</html>
<?php include ('Partials-Front/footer.php'); ?>