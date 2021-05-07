

<?php include('./admin/config/constants.php');  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria</title>
  

    <!--Link To Our Css File -->
    <link rel="stylesheet" href="css/stylee.css">
</head>
<body >


    
            
    
    
    

    <!---Nav Section Starts Here -->
     <section class="navbar">
         <div class="container ">
       <div class="logo" >
           
           <img class = "circular_square" src="images/logo.png" alt="Logo.png" style="width:100px">
        
       </div>
          <div class = "menu text_right"> 
              <ul>

            
            
            
            <li>
                <a href="<?php echo SITEURL;?>">Home</a>
            </li>

          
                <li>
                      <a href="<?php echo SITEURL;?>pizza.php">Pizza</a>
                    
                </li>

                <li>
                      <a href="<?php echo SITEURL;?>myorders.php">My Orders</a>
                   
                </li>
             
            

             <li>
        <a href="<?php echo SITEURL;?>logout.php">Sign Out </a>
               
            </li>


            
          

          
          <li>
      
          <a href=" <?php echo SITEURL;?>specialorders.php">Special Orders  </a>
        </li>


         <li>
                
          <a href="<?php echo SITEURL;?>cart.php">Cart</a>
            </li>

            

             <li>
                
                  <a href="<?php echo SITEURL;?>shoppingcart.php">Shop</a>
            </li>

            


<div class ="clear-fix">


</div>


              </ul>
          </div>
        </div>
     </section>

    <!---Nav Section Ends  Here -->