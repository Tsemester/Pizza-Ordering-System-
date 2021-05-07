
if(isset($_POST['featured']))
{

$featured=$_POST['featured'];

}
else{
 $featured="No";
}


if(isset($_POST['active']))
{
$active=$_POST['active'];
}
else{
$active="No";
}


if(isset($_FILES['image']['name']))
{


     $image_name=$_FILES['image']['name'];

     if($image_name!="")
     {

      $ext=end(explode('-',$image_name));

      $image_name="Pizzeria_Stuff_".rand(000,999).'.'.$ext;
     
     $src=$_FILES['image']['tmp_name'];

    $dest="stuffimages/".$image_name;

      $upload=move_uploaded_file($src,$dest);


     if($upload==false)
     {

  $_SESSION['upload']="<div class='error'> Failed to add image try again.</div>";

  //redirect to main page 
    header("location:" . SITEURL . 'admin/add-pizzeria-stuff.php');
    die();
}

}

}

else{

    $image_name="";
}

$sql = "INSERT INTO tbl_pizza
 SET 
 title='$title', 
 description='$description', 
 price=$price,
 image_name='$image_name',
 category_id=$category,
 featured='$featured', 
 active='$active' 
 "; 



$res2 = mysqli_query($conn,$sql);

if($res2==true) {

         $_SESSION['add'] =  "<div class='success'>  Stock  Added Succesfully.</div>";

  //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-pizzeria-stuff.php');
}

 else {
       $_SESSION['add'] =  "<div class='error'> Failed To Add Stock . Try Again.</div>";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-pizzeria-stuff.php');
}


