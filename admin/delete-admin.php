
<?php

//include constants.php
include('./config/constants.php');



//get the id of the admin to be deleted 

$id = $_GET['id'];

//create sql query 

$sql = "DELETE FROM tbl_admin WHERE id=$id";
//Execute the query '

$res = mysqli_query($conn, $sql);


// check whether the query executedc or not
if ($res == TRUE) {
    // Query Executed succesfully  and admin deleted

    //echo "Admin Deleted Succesfully ";


    $_SESSION['delete'] = "<div class='success'> Admin Deleted Successfully.</div> ";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-admin.php');
} else {
    //Failed to delete the admin 


    // echo "Failed To Delete Admin  ";
    $_SESSION['delete'] =  "<div class='error'> Failed To Delete Admin  . Try Again.</div>";

    //redirect to main page 
    header("location:" . SITEURL . 'admin/manage-admin.php');
}
//redirect to manage admin(success or error)





?>