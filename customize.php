<?php include('Partials-Front/menu.php');  ?>

<link rel="stylesheet" href="css/orders.css">
<link rel="stylesheet" href="css/admin.css">


  <?php 
if(empty($_SESSION['user_id']))  //if user is not login redirected back to login page
{
	header('location:sign-in.php');
}
else
{


if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    $sql = "SELECT * FROM tbl_category  WHERE id=$item_id";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($res);
        $price = $row['price'];
        $title = $row['title'];
        $description = $row['description'];
        $image_name = $row['image_name'];
    } else {
        header('location:'.SITEURL );
    }
} else {
    header('location:' .SITEURL  );
}
?>
<style> 

#customize{
color: #ffa502;

}

 tr{

    padding:  2px ;
    height: 10px;
    margin: 10px;
}
</style>

<body>
    


    <!-- fOOD sEARCH Section Starts Here -->
    <section class="res-search">
 
        <div class="container">
            
            <h2 class="text-center " style="color:#ffa502;">Fill this form to confirm your order.</h2>

            <form id="customize"action="<?php echo SITEURL; ?>customize.php" class="order" method="POST">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="pizza-menu-img">
                        <?php
if ($image_name == "") {
    echo "<div class='error'> Image Not Available .</div> ";
} else {
?>
                                 
                                 <img src="<?php echo SITEURL; ?>admin/stuffimages/<?php echo $image_name; ?>"  alt="" class="img-responsive  img-curve">
                               <?php
}
?>

        
                      
             </div>
    
                    <div class="pizza-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="food" value="<?php echo $title; ?>"> 
                      
                        <p class="food-price">P<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>"> 


                   



                        
                       

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                         

                    </div>

                    
                </fieldset>



                
<fieldset  >
<legend>Customize Your Order</legend>

<table class="tbl_full ">

<br> <br>

<tr>
    <td>Shapes:</td>
    <td>
        <input type="radio" name="shape" value="Square"> Square
        <input type="radio" name="shape" value="Rectangle"> Rectangle
    
        <input type="radio" name="shape" value="Ellipse"> Ellipse
          <input type="radio" name="shape" value="Circular"> Circular
    </td>
</tr>

    <td>Crest:</td>
    <td>
        <input type="radio" name="crest" value="Thin"> Thin
        <input type="radio" name="crest" value="Thick"> Thick
        <input type="radio" name="crest" value="Stuffed"> Stuffed
        <input type="radio" name="crest" value="Edge Stuffed"> Edge Stuffed
       
    </td>
</tr>

    <td>Herbs:</td>
    <td>
        <input type="radio" name="herb" value="Basil">Basil
        <input type="radio" name="herb" value="Black Pepper">Peppper
        <input type="radio" name="herb" value="Pasley And Rosemary">Pasley
        <input type="radio" name="herb" value="Paprika">Paprika
    
    </td>
</tr>


       <td>Toppings:</td>
    <td>
        <input type="radio" name="topping" value="Extra Cheese">Cheese
        <input type="radio" name="topping" value="Extra Pepparoni">Pepparoni
        <input type="radio" name="topping" value="Extra Olives">Olives 
       
    </td>
</tr>


<tr>

    <td>Size:</td>
    <td>
        <input type="radio" name="size" value="Small"> Small
        <input type="radio" name="size" value="Big ">Big
        <input type="radio" name="size" value="Tripple Decker">Tripple Decker
    
    </td>
</tr>

<tr>

    <td>Additional:</td>
    <td>
        <input type="radio" name="item" value="Pasta"> Pasta
        <input type="radio" name="item" value="Garlic "> Garlic Bread 
        <input type="radio" name="item" value="Ginger"> Ginger Bread
    
    </td>
</tr>


       

</table>
                
                
                
                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>

                   

                     <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Tsemester" class="input-responsive" required>
                      <div class="order-label">Username</div>
                    <input type="text" name="username" placeholder="E.g. Tsemester" class="input-responsive" required>
                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 76xxxxx" class="input-responsive" required>
        
                    <div class="order-label">Address</div>
                    <textarea name="address" rows="5" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>
</body>
            <?php
if (isset($_POST['submit'])) {





    

  $data = '';

    $food = $_POST['food'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $price * $qty;
    $date = date("y-m-d-h:i:sa CAT ");
    $status = "Ordered";
   
    $customer_name = $_POST['full-name'];
    $customer_email = $_POST['email'];
    $username = $_POST['username'];
    $customer_contact = $_POST['contact'];
    $customer_address = $_POST['address'];




    
if(isset($_POST['crest']))
{

$crest=$_POST['crest'];

}


else{

    $crest="Thin";
}


if(isset($_POST['shape']))
{

$shape=$_POST['shape'];

}
else{

    $shape="Circular";
}




    
if(isset($_POST['topping']))
{

$topping=$_POST['topping'];

}


else{

    $topping="Cheese";
}


if(isset($_POST['herb']))
{

$herb=$_POST['herb'];

}
else{

    $herb="Basil";
}


    
if(isset($_POST['item']))
{

$item=$_POST['item'];

}


else{

    $item="Pasta";
}


if(isset($_POST['size']))
{

$size=$_POST['size'];

}
else{

    $size="Small";
}

    $sql2 = "INSERT INTO tbl_order SET 
                                 
                                     food='$food',
                                     price=$price,
                                     qty=$qty,
                                     total=$total,
                                     date='$date',
                                     status='$status',
                                     topping ='$topping',
                                     item='$item',
                                      herb='$herb',
                                    shape='$shape',
                                    crest ='$crest',
                                     size='$size',

                                
                                    customer_name='$customer_name',
                                    customer_email='$customer_email',
                                      username='$username',
                                    customer_contact='$customer_contact',
                                 customer_address='$customer_address'
                                 ";


    $res2 = mysqli_query($conn, $sql2);
    
    
                 $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Order Placed Successfully!</h2>
								<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $food . '</h4>
								<h4>Your Name : ' . $customer_name . '</h4>
								<h4>Your E-mail : ' . $customer_email . '</h4>
								<h4>Your Phone : ' . $customer_contact . '</h4>
							
                                	<h4>Total Amount Paid : '. $total.  '</h4>
								<h4>Payment Mode : ' . $pmode . '</h4>
						  </div>';


    if ($res2 == true) {
    

         $_SESSION['order'] = "<div class='success text_center'>  Order Placed Succesfully.</div>";
        header('location:' . 'myorders.php');
 
    
	 } else {
        $_SESSION['order'] = "<div class='error  text_center'> Failed To Place Order Please Try Again  . Try Again.</div>";
        //redirect to main page
        header('location:' . SITEURL);
    }
    
	
}


?>


</section >



<?php include('Partials-Front/footer.php');  ?>
<?php

}

?>