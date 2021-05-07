<?php
include('./config/constants.php');
  
  if(isset($_GET['id']) AND isset($_GET['image_name']))
  {

  $id=$_GET['id'];
  $image_name=$_GET['image_name'];


  if($image_name!="")

  {

    $path="images/".$image_name;

    $remove=unlink($path);
  
  if($remove==false)
  {
      $_SESSION['remove']="<div class='error'> Failed to remove Please  image try again.</div>";

  //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-category.php');
    die();

  }

  }

  
$sql = "DELETE FROM tbl_category2 WHERE id=$id";
//Execute the query '



$res = mysqli_query($conn, $sql);

if ($res == TRUE)

{

     $_SESSION['delete'] = "<div class='success'> Category Deleted Successfully.</div> ";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-category.php');

}

else{

    $_SESSION['delete'] =  "<div class='error'> Failed To Delete Category  . Try Again.</div>";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-category.php');


}

}
  else
  {


        header("location:" . SITEURL . 'admin/manage-category.php');
  }

?>