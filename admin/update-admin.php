<?php include('partials/menu.php'); ?>


<div class="Main-content ">

    <div class="wrapper">
        <h1>Update Admin </h1>
        <br> </br>


        <?php

        //get the id of the admin to be deleted 

        $id = $_GET['id'];

        //create sql query 

        $sql = "SELECT * FROM tbl_admin WHERE id=$id";

        //Execute the query '

        $res = mysqli_query($conn, $sql);


        // check whether the query executedc or not
        if ($res == true) {
            // Query Executed succesfully  and admin deleted

            //check whether we have  data 
            $count = mysqli_num_rows($res);


            //check whether we have admin data or not 
            if ($count == 1) {

                //Get Details 

                // echo"Admin Details Available";

                $row = mysqli_fetch_assoc($res);
                $full_name = $row['full_name'];
                $username = $row['username'];
            } else {

                //redirect to manage admin
                header("location:" . SITEURL . 'admin/manage-admin.php');
            }
        }

        ?>


        <form action="" method="POST">


            <table class=" tbladmin">

                <tr>
                    <td>FullName: </td>
                    <td><input type="text" name="full_name" value="<?php echo $full_name; ?> "></td>
                </tr>

                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" value="<?php echo $username; ?> "></td>
                </tr>

                <tr>
                    <td colspan=" 2">

                        <input type="hidden" name="id" value="<?php echo $id; ?> ">
                       
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">

                    </td>

                </tr>







            </table>





        </form>





    </div>
</div>


<?php
// Check whether the submit button has been clicked 


if (isset($_POST['submit'])) {

   // echo "Button Clicked ";

   //Get All The Values From

   $id=$_POST['id'];
   $full_name = $_POST['full_name'];
   $username = $_POST['username'];

    // create sql query to admin 
    $sql = "UPDATE   tbl_admin SET 
     full_name='$full_name',
     username='$username'
       WHERE id='$id' " ; 
       

       

   //Execute the query 

   $res=mysqli_query($conn, $sql);

   // check whether the query executed succsesfully ot not 
   if($res==true)
   {
        //Queries  Execute and admin succefully updated 
        $_SESSION['update'] = "<div class='success'> Admin Updated  Successfully.</div> ";
        //Rediret to main page
        header("location:" . SITEURL . 'admin/manage-admin.php');
    
   }

     else{

        $_SESSION['update'] = "<div class='error'> Failed To  Update  Admin .</div> ";

        header("location:" . SITEURL . 'admin/manage-admin.php');

          ///query did not execute succesfully 


     }

}

?>

<?php include('partials/footer.php'); ?>