
<?php include('partials/menu.php'); ?>

<?php 
if(isset($_GET['id']))
{

 $id=$_GET['id'];

   
$sql2 = "SELECT * FROM tbl_category WHERE id=$id";

$res2 = mysqli_query($conn, $sql2);






    $row2 = mysqli_fetch_assoc($res2);
    $title=$row2['title'];
     $description=$row2['description']; 
     $current_image=$row2['image_name'];
      
     $featured=$row2['featured'];
      $active=$row2['active'];
     $price=$row2['price'];
     $current_category=$row2['category'];

}






else
{
header("location:" . SITEURL . 'admin/manage-stock.php');


}

?> 




<div class = "main-content ">

<div class = "wrapper"> 

<h1>Update Stock</h1>

<br/> <br/>


<!---Add Category Form Starts --->
<form action="" method="POST" enctype="multipart/form-data">

<table class="tbladmin">

<tr>
    <td>Title:</td>
    <td>
    <input type="text" name="title" value="<?php echo $title;  ?> ">
    </td>
</tr>



<tr>

<td>Description:</td>

<td>
<textarea name="description" cols="30" rows="5" > <?php  echo $description;?> </textarea>

</td>


</tr>


<tr> 


<td>Price:</td>

<td>
<input type="number" name="price" value="<?php echo $price ?>">


</td>


</tr>


<tr> 

<td> Category:</td>

<td>
<select name="category" >

<?php

$sql= "SELECT * FROM tbl_category2 WHERE active='Yes'";

$res=mysqli_query($conn,$sql);

$count=mysqli_num_rows($res);


if($count>0)
{


    while($row=mysqli_fetch_assoc($res)){

        $category=$row['id'];
        $category_title=$row['title'];
        ?>


           <option <?php 
           
           if($current_category==$category)
           {
               echo "selected";
           }
           
           
           ?> value="<?php echo $category; ?> "><?php echo $category_title; ?>  </option>
        <?php

    }

}


else{


    ?>
     <option value="0">No Category Found </option>

    <?php
}
?>
 


</select>

</td>


</tr>











<tr>
<td>Current Image:</td>
 <td>
<?php
  if($current_image != "")
  {
 ?>
<img src="stuffimages/<?php echo $current_image; ?> " width="150px" alt="<?php echo $title ?> " >
<?php
}
 else{
echo "<div class='error'> Image Not Added.</div>";
}
?>
  
 </td>

</tr>

<tr>
    <td>New Image:</td>
    <td>
        <input type="file" name="image" >
    </td>
</tr>

<tr>
    <td>Featured:</td>
    <td>
 <input <?php if($featured=="Yes") {echo "checked" ;} ?> type="radio" name="featured" value="Yes"> Yes 
 <input <?php if($featured=="No") {echo "checked" ;} ?> type="radio" name="featured" value="No"> No 
    </td>
</tr>


<tr>
    <td>Active:</td>
    <td>
         <input <?php if($active=="Yes") {echo "checked";} ?>type="radio" name="active" value="Yes">Yes

         <input <?php if($active=="No") {echo "checked";} ?> type="radio" name="active" value="No">No
    </td>
</tr>

<tr>
    <td >
           <input type="hidden" name="current_image" value="<?php echo $current_image;?> " >
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submit" value="Update Category" class="btn-secondary">
    </td>
</tr>

</table>

</form>

<?php


if(isset($_POST['submit']))
{

    $id=$_POST['id'];
    $title=$_POST['title'];
    $current_image=$_POST['current_image'];
    $featured=$_POST['featured'];
    $active=$_POST['active'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $category=$_POST['category'];



    if(isset($_FILES['image']['name']))
    {
    
      $image_name=$_FILES['image']['name'];


      if( $image_name!= "")
      {


        //Image Available 


        //Upload New Image  
      $ext=end(explode('-',$image_name));
      $image_name="Pizzeria_Stock_".rand(000,999).'.'.$ext;
     
     $source_path=$_FILES['image']['tmp_name'];

    $destination_path="stuffimages/".$image_name;

      $upload=move_uploaded_file($source_path,$destination_path);


     if($upload==false)
     {

  $_SESSION['upload']="<div class='error'> Failed to add image try again.</div>";

  //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-stock.php');
    die();
}
    

  if($current_image!= "")

  {
     
     //Remove Current immage
 
        $remove_path="stuffimages/".$current_image;

        $remove=unlink($remove_path);

        //check if removed 


        //if failed 

        if($remove==false)
        {
             $_SESSION['fail-remove']="<div class='error'> Failed to Remove Current Image.</div>";
 
             header("location:" . SITEURL . 'admin/manage-stock.php');
              die();
        }

  }
       

      }

      else{

          $image_name = $current_image;
      }

    }

    else

    {
        $image_name = $current_image;

    }

    
    $sql3= "UPDATE  tbl_category SET 
     
     title='$title',
     price=$price,
     description='$description',
     image_name='$image_name',
     featured='$featured',
     active='$active',
     category=$category
     WHERE id=$id

    
     ";
     $res3 = mysqli_query($conn, $sql3);

     if($res3==true)
     {
      
         $_SESSION['update'] = "<div class='success'> Stocks Updated Succesfully.</div>";

  
    header("location:".SITEURL .'admin/manage-stock.php');

     }

      else{
        $_SESSION['update'] =  "<div class='error'> Failed To Update Stocks .</div>";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-stock.php');

      }

}


?>

</div>
</div>
<?php include('partials/footer.php'); ?>
