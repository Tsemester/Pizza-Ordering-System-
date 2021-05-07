  <?php include('Partials-Front/menu.php'); ?>
<?php


if(isset($_GET['category']))
{

  $category=$_GET['category'];

   $sql= "SELECT title  FROM tbl_category2  WHERE id=$category";

     $res=mysqli_query($conn,  $sql );
     $row=mysqli_fetch_assoc($res);
     $title=$row['title'];


}


else{
  header('location:'. SITEURL);


}
?>

<section class="res-search text_center">
        <div class="container">
        
        
            
            <h2>Foods on Category <a href="#" class="text-white">"<?php echo $title; ?>"</a></h2>

        </div>
    </section>

    


    </section>

      <section class="pizza-menu">
            <div class="container ">
                <h2 class="text_center">Explore Pizza Menu</h2>
                <?php 

                
            $sql2= "SELECT * FROM tbl_category WHERE category=$category  ";

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
                                 
                                 <img src=" admin/stuffimages/<?php echo $image_name ;?>"  alt="" class="img-responsive  img-curve">
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

      </section>



   

  <?php include('Partials-Front/footer.php'); ?>
</body>
</html>