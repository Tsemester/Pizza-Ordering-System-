<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria</title>
  

    <!--Link To Our Css File -->
    <link rel="stylesheet" href="css/Fstyle.css">
  
  
</head>
<body >
<?php include('Partials-Front/menu.php'); ?>


  


<?php 

if(isset($_SESSION['feed']))
{

    echo $_SESSION['feed'];
    unset($_SESSION['feed']);

}



?>


    <section>
        <h1 id="fillout">PLEASE FILL OUT THE FORM BELOW !</h1><br>
        <h3 id="yorn" > YES or NO SECTION</h3><br>
<div class="form">
                <form action="" method="post">
                    <p> Have you had our pizza?</p>
                            <input type="checkbox" value="Yes" name="had">
                           <label for="Yes"> Yes </label>
                            <input type="checkbox" value="no" name="had">
                            <label for="no">No</label>
                             <br> <br>
                            <p> Would you buy more of our pizzas if we had discounts?</p>
                            <input type="checkbox" value="Yes" name="buy">
                            <label for="Yes">Yes</label>
                            <input type="checkbox" value="No" name="buy">
                            <label for="No">No</label><br> <br>
                            <p> Do you order our pizza often?</p>
                            <input type="checkbox" value="Yes" name="orders">
                            <label for="Yes">Yes</label>
                            <input type="checkbox" value="No" name="orders">
                            <label for="No">No</label><br> <br>
                            <p> Was using our site to order pizza easy?</p>
                            <input type="checkbox" value="Yes" name="sit">
                            <label for="Yes">Yes</label>
                            <input type="checkbox" value="No" name="sit">
                            <label for="No">No</label><br> <br>
                            <p> Are you happy with the pizzeria locations?</p>
                            <input type="checkbox" value="Yes" name="happy">
                            <label for="Yes">Yes</label>
                            <input type="checkbox" value="No" name="happy">
                            <label for="No">No</label><br> <br>
                            <p> Would recommend you our pizza to anyone else?</p>
                            <input type="checkbox" value="Yes" name="rec">
                            <label for="Yes">Yes</label>
                            <input type="checkbox" value="No" name="rec">
                            <label for="No">No</label><br> <br>

                            
                            <h3 id="desSec" > DESCRIPTION SECTION</h3><br>
               
                
                    <p>Tell us about your experience with pizzeria</p>
                    <textarea type="comment" class="form-control z-depth-1" id="email" name="exps" maxlength="500" rows="4" cols="50" placeholder="Write something here..." ></textarea><br> <br>
                    <p>Is there anything you like to change about pizzeria</p>
                    <textarea type="comment" class="form-control z-depth-1" id="email" name="change" maxlength="500" rows="4" cols="50" placeholder="Write something here..." ></textarea><br> <br>
                    <p> What would you recommend ?</p>
                    <textarea type="comment" class="form-control z-depth-1" id="email" name="recom" maxlength="500" rows="4" cols="50" placeholder="Write something here..." ></textarea><br> <br>
                    <p> Please rate our customer service out of ten ?</p>
                    <textarea type="comment" class="form-control z-depth-1" id="email" name="rate" maxlength="500" rows="4" cols="50" placeholder="Write something here..." ></textarea><br> <br>
                   
        
             
            <input type="submit" name="submit" value="Submit Feedback" class="btn-primary">
            </form>
          



          
<?php

if(isset($_POST['submit'])) {


    
$rate=$_POST['rate'];
$recom=$_POST['recom'];
$change=$_POST['change'];
$exps=$_POST['exps'];

if(isset($_POST['had']))
{

$had=$_POST['had'];

}


else{

    $had="No";
}


if(isset($_POST['buy']))
{

$buy=$_POST['buy'];

}
else{

    $buy="No";
}

if(isset($_POST['orders']))
{

$orders=$_POST['orders'];

}
else{

    $orders="No";
}

if(isset($_POST['sit']))
{

$sit=$_POST['sit'];

}
else{

    $sit="No";
}
if(isset($_POST['happy']))
{

$happy=$_POST['happy'];

}
else{

    $happy="No";
}


if(isset($_POST['rec']))
{

$rec=$_POST['rec'];

}
else{

    $rec="No";
}

$sql="INSERT INTO  tbl_feedback
 SET 
 rate='$rate', 
 recom='$recom',
 change='$change',
 exps='$exps', 
 had='$had' ,
 buy=$buy,
 orders='$orders',
 sit= '$sit',
 rec='$rec',
 happy='$happy '


 "; 


$res = mysqli_query($conn, $sql);

if($res==true) {

 $_SESSION['feed'] =  "<div class='success'>  Feedback Submitted SuccessFully .</div>";

   header("location:" . SITEURL . 'index.php');
          
  //redirect to main page 
  
}

 else {
       $_SESSION['feed'] =  "<div class='error'> Failed To Submit Feedback   . Try Again.</div>";
      

  
    //redirect to main page 
   
}

}

?>
                   
                            
</section>

  
   
</body>
<?php include('Partials-Front/footer.php'); ?>
</html>
