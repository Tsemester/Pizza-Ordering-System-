<?php include('partials/menu.php'); ?>


<div class = "main-content ">

<div class = "wrapper"> 

<h1>Manage Orders</h1>





<br/> <br/>

<?php

if(isset($_SESSION['update']))
{

    echo $_SESSION['update'];
    unset($_SESSION['update']);

}



?>

<table class = "tbl_full">
<tr>

<th>Id</th>
<th>Food</th>

<th>Qty</th>
<th>Total</th>
<th>Date</th>
<th>Status</th>

<th>User</th>

<th>Contact</th>
<th>Address</th>
<th>Actions</th>
</tr>




   <?php

            $sql = "SELECT * FROM tbl_order ORDER BY 'date' DESC "; // Query To Get All 

            $res = mysqli_query($conn, $sql); //Execute Query 

           

                $count = mysqli_num_rows($res); //Function to get all the rows in a databse
                $sn = 1;
                 if($count>0)

                 {
                    // We Have a database 

                    while ($row= mysqli_fetch_assoc($res)) {

             $id = $row['id'];
                 $food=$row['food'];
              
                 $qty=$row['qty'];
                   $total=$row['total'];
                     $date=$row['date'];
                       $status= $row['status'];
                      
                           $username=$row['username'];
                           
                               $customer_contact=$row['customer_contact'];
                                 $customer_address=$row['customer_address'];


                     ?> 




<tr> 

 <td><?php echo $sn++; ?></td>
    <td><?php echo $food; ?></td>
  
    <td><?php echo $qty; ?></td>

    <td><?php echo $total; ?></td>
      <td><?php echo $date; ?></td>
    <td>
    <?php if($status=="Ordered")
    {
      echo"<label> $status </label>"; 
      
    }

    elseif($status=="On Delivery")
    {

  echo "<label style=color:orange; >$status </label>";
    }

    elseif($status=="Delivered")
    {
      echo "<label style=color:green; >$status </label>";

    }
    elseif($status=="Cancelled"){
      echo "<label style=color:red; >$status </label>";

    }
    ?>
    
    </td>
  
   
    <td><?php echo $username; ?></td>
  
    <td><?php echo $customer_contact; ?></td>
    <td><?php echo $customer_address; ?></td>
    
    
    <td>
         <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Update Order</a>
       
    
    </td>
</tr>
                     <?php

                    }

                }

                     else 

                     {

                        ?>
                   
                    <tr>
                  <td colspan="13"><div class="error">No Order Placed </div></td>
                 </tr>

<?php 
                     }

                     ?>




</table>

</div>


</div>


<?php include('partials/footer.php'); ?>