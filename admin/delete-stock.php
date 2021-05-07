<?php
include('./config/constants.php');
  
  if(isset($_GET['id']) AND isset($_GET['image_name']))
  {

  $id=$_GET['id'];
  $image_name=$_GET['image_name'];


  if($image_name!="")

  {

    $path="stuffimages/".$image_name;

    $remove=unlink($path);
  
  if($remove==false)
  {
      $_SESSION['remove']="<div class='error'> Failed to remove Please  image try again.</div>";

  //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-stock.php');
    die();

  }

  }

  
$sql = "DELETE FROM tbl_category WHERE id=$id";
//Execute the query '



$res = mysqli_query($conn, $sql);

if ($res == TRUE)

{

     $_SESSION['delete'] = "<div class='success'> Stock  Deleted Successfully.</div> ";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-stock.php');

}

else{

    $_SESSION['delete'] =  "<div class='error'> Failed To Delete Stock . Try Again.</div>";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-stock.php');


}

}
  else
  {


        header("location:" . SITEURL . 'admin/manage-stock.php');
  }

?>