<?php
 include('Partials-Front/menu.php'); 
include("connection/connect.php"); //connection to db
error_reporting(0);
session_start();


// sending query
mysqli_query($conn,"DELETE FROM tbl_order  WHERE id= '".$_GET['order_del']."'"); // deletig records on the bases of ID
header("location: myorders.php");  //once deleted success redireted back to current page

?>