<?php include('partials/menu.php'); ?>


<link rel="stylesheet" href="../css/admin.css">
<!--- Main Content Section Starts -->

<div class="Main-content ">

   


    <div class="wrapper">

        <h1>Manage Admin</h1>
        <br />


        <?php

        if (isset($_SESSION['add'])) {

            echo $_SESSION['add'];  // Displaying Session Message
            unset($_SESSION['add']); // Removing Session Message 

        }

        if (isset($_SESSION['delete'])) {

            echo $_SESSION['delete'];  // Displaying Session Message
            unset($_SESSION['delete']); // Removing Session Message 

        }

if (isset($_SESSION['update'])) {

    echo $_SESSION['update'];  // Displaying Session Message
    unset($_SESSION['update']); // Removing Session Message 

}
if (isset($_SESSION['user_not_found'])) {

    echo $_SESSION['user_not_found'];  // Displaying Session Message
    unset($_SESSION['user_not_found']); // Removing Session Message 

}

if (isset($_SESSION['passwords_not_match'])) {

    echo $_SESSION['passwords_not_match'];  // Displaying Session Message
    unset($_SESSION['passwords_not_match']); // Removing Session Message 

}

if (isset($_SESSION['password_changed'])) {

    echo $_SESSION['password_changed'];  // Displaying Session Message
    unset($_SESSION['password_changed']); // Removing Session Message 

}



  




        ?>
        <br /> <br /> <br />


        <!---Button to add admin -->
        <a href="add-admin.php" class=" btn-primary">Add Admin </a>

        <br /> <br />

        <table class="tbl_full">
            <tr>

                <th>Id</th>
                <th>Fullname</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>

            <?php

            $sql = "SELECT * FROM tbl_admin "; // Query To Get All admins 

            $res = mysqli_query($conn, $sql); //Execute Query 

            //check whether the query is executed or not 
            if ($res == TRUE) {

                //count rows to check whether we have a databse or not

                $count = mysqli_num_rows($res); //Function to get all the rows in a databse

                $sn = 1;
                //check rows 
                if ($count > 0) {

                    // We Have a database 

                    while ($rows = mysqli_fetch_assoc($res)) {

                        $id = $rows['id'];
                        $full_name = $rows['full_name'];
                        $username = $rows['username'];

                        //diplay our values

            ?>

                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $full_name; ?></td>
                            <td><?php echo $username; ?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>admin/change-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>

                            </td>
                        </tr>

            <?php

                    }
                } else {

                    // We dont have a database 
                }
            }

            ?>


        </table>



    </div>
</div>


<!--- Main Content Section Ends -->
<?php include('partials/footer.php'); ?>