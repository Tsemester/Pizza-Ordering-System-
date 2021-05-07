<?php include('Partials-Front/menu.php'); ?>

<head>


<!-- Bootstrap CSS -->
    

</head>

<!---Search Section Starts Here -->
    <section class="res-search text_center">
        <div class="container ">
            <form action="<?php echo SITEURL;?>pizza-search.php" method="POST">

                <input type="search" name="search" placeholder="Search for pizza ">
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
           
        
        </div>
    </section>

    <div>
    
    
    <?php 


if(isset($_SESSION['feed']))
{

    echo $_SESSION['feed'];
    unset($_SESSION['feed']);

}

   
   
     if(isset($_SESSION['create']))
    {

        echo $_SESSION['create'];
        unset($_SESSION['create']);
    }

     if(isset($_SESSION['login']))
    {

        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }



    ?>

    
    
    
    
    </div>

    
    
    <!---Search Section Ends  Here -->
    
    <!---Category Section Starts Here -->
    <section class="categories">
        <div class="container ">
            <h2 class="text_center">Explore Pizzeria </h2>

            <?php 

            $sql= "SELECT * FROM tbl_category2 WHERE active ='Yes' AND featured='Yes' LIMIT 4 ";

            $res=mysqli_query($conn,  $sql );

            $count=mysqli_num_rows($res);

            if($count>0)

            {

                while($row=mysqli_fetch_assoc($res))
                {

                    $id=$row['id'];
                    $title=$row['title'];
                    $image_name=$row['image_name'];
                    ?>
                   <a href="<?php echo SITEURL;?>category-Pizza.php?category=<?php echo$id; ?>">
            <div class="box-1 float-container">
                <?php 

                if($image_name =="")
                {
               
                echo  "<div class='error'> Image  Not Available .</div> ";

                }
            

                else{
                    ?>

                       <img src="<?php echo SITEURL ; ?>admin/images/<?php echo $image_name ;?>"  alt="special" class="img-responsive  img-curve">
                   
                    <?php

                }


                
                ?>
            
              
                <h3 class="float-text text-white" ><?php echo $title; ?></h3>
            </div>
           </a>
            
                    <?php


                }


            }

            else{

                echo  "<div class='error'> Category Not Available .</div> ";
            }

            ?>
            
        
        
            <div class="clear-fix"></div>
        
        </div>
    </section>
    
    <!---Category Section Ends  Here -->

    <!---Pizza Menu  Section Starts Here -->
    <section class="pizza-menu">
            <div class="container ">
                <h2 class="text_center">Explore Pizza Menu</h2>
                <?php 

                
            $sql2= "SELECT * FROM tbl_category WHERE active ='Yes' AND featured='Yes' LIMIT 6";

            $res2=mysqli_query($conn,  $sql2 );

            $count2=mysqli_num_rows($res2);

            if($count2>0 )
            {

              while($row2=mysqli_fetch_assoc($res2))
              {
             $id=$row2['id'];
             $description=$row2['description'];
             $price=$row2['price'];
             $title=$row2['title'];
              $image_name=$row2['image_name'];
              ?>

            <div class="pizza_menu_box">
                    <div class= "pizza-menu-img">
                        <?php 
                          if($image_name=="")
                          {

                   
                             echo  "<div class='error'> Image Not Available .</div> ";
                          }

                          else{
                               ?>
                                 
                                 <img src="<?php echo SITEURL ; ?>admin/stuffimages/<?php echo $image_name ;?>"  alt="" class="img-responsive  img-curve">
                               <?php 


                          }

                        ?>
                       
                    </div>
                    <div class="food-menu-des">
                        <h4><?php echo $title ?> </h4>
                        <p class="pizza-price">P <?php echo $price; ?></p>
                        <p class="pizza-detail"><?php  echo $description?></p>
                        <br>
                        <a href="<?php echo SITEURL;?>orders.php?item_id=<?php echo $id; ?>" class="btn-primary">Order Now</a>
                         
                    </div>
                    
                </div>


            


              <?php 

              }

            }

            else{
            

                  echo  "<div class='error'> Category Not Available .</div> ";

            }

                ?>
               
                <div class="clear-fix"></div>


               

              

              

          
            </div>

            

        <p class="text_center">
            <a href="category-Pizza.php" style="color: white;">See All The Menu</a>
        </p>

    </section>
    
    <!---Pizza Menu Section Ends  Here -->



    



   
<?php include('Partials-Front/footer.php'); ?>