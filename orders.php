  
 <head>
     <link rel="stylesheet" href="css/orders.css">
 </head> 
  <?php include ('Partials-Front/menu.php'); ?>

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
        header('location:' . SITEURL);
    }
} else {
    header('location:' . SITEURL);
}
?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="res-search">
 
        <div class="container">
            
            <h2 class="text-center " style="color:#eccc68;">Fill this form to confirm your order.</h2>

            <form action="<?php echo SITEURL; ?>orders.php" class="order" method="POST">
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
                
                <fieldset>
                    <legend>Delivery Details</legend>

                    <div class="order-label">Delivery Type </div>
                    <input type="text" name="delivery" placeholder="E.g. Pickup" class="input-responsive" required>

                     <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Tsemester" class="input-responsive" required>
                      <div class="order-label">Username</div>
                    <input type="text" name="username" placeholder="E.g. Tsemester" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 76xxxxx" class="input-responsive" required>
            
                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. tseme@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

            <?php
if (isset($_POST['submit'])) {
    $food = $_POST['food'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $price * $qty;
    $date = date("y-m-d-h:i:sa CAT ");
    $status = "Ordered";
    $delivery_type = $_POST['delivery'];
    $customer_name = $_POST['full-name'];
    $customer_email = $_POST['email'];
    $username = $_POST['username'];
    $customer_contact = $_POST['contact'];
    $customer_address = $_POST['address'];
    $sql2 = "INSERT INTO tbl_order SET 
                                 
                                     food='$food',
                                     price=$price,
                                     qty=$qty,
                                     total=$total,
                                     date='$date',
                                     status='$status',
                                     delivery_type='$delivery_type',
                                    customer_name='$customer_name',
                                    customer_email='$customer_email',
                                      username='$username',
                                    customer_contact='$customer_contact',
                                 customer_address='$customer_address'
                                 ";
    $res2 = mysqli_query($conn, $sql2);
    if ($res2 == true) {
        $_SESSION['order'] = "<div class='success text_center'>  Order Placed Succesfully.</div>";
        //redirect to main page
        
      header('location:' . 'myorders.php');
    } else {
        $_SESSION['order'] = "<div class='error  text_center'> Failed To Place Order Please Try Again  . Try Again.</div>";
        //redirect to main page
        header('location:' . SITEURL);
    }
}
?>

        </div>
    </section>
   <?php  include ('Partials-Front/footer.php'); ?>


<?php
}
?>