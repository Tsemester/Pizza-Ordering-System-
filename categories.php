 <?php include('Partials-Front/menu.php'); ?>
 <link rel="stylesheet" href="css/stylecat.css"> 




    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text_center">Explore Foods</h2>

            <?php

             $sql2= "SELECT * FROM tbl_category2  WHERE active ='Yes'  ";

            $res2=mysqli_query($conn,  $sql2 );

            $count2=mysqli_num_rows($res2);

            if($count2>0 )
            {

              while($row2=mysqli_fetch_assoc($res2))
              {
             $id=$row2['id'];
             $title=$row2['title'];
              $image_name=$row2['image_name'];
              ?>
      <a href="<?php echo SITEURL;?>category-Pizza.php?category=<?php echo$id; ?>">
           
            <div class="box-3 float-container">
               
                <?php

                 if($image_name=="")
                          {

                   
                             echo  "<div class='error'> Image Not Available .</div> ";
                          }

                          else{
                               ?>
                                 
                                 <img src="<?php echo SITEURL ; ?>admin/images/<?php echo $image_name ;?>"  alt="" class="img-responsive  img-curve">
                               <?php 


                          }

                        ?>

                   

                <h3 class="float-text text-white"><?php echo $title; ?></h3>
            </div>
              <?php 

              }

            }

            else{
            

                  echo  "<div class='error'> Category Not Available .</div> ";

            }

                ?>
            </a>
            

            <div class="clearfix"></div>

        </div>
        
    </section>

    <?php include('Partials-Front/footer.php'); ?>

 