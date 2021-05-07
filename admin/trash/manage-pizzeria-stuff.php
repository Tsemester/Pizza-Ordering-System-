<?php include('partials/menu.php'); ?>


<div class = "main-content ">

<div class = "wrapper"> 
<h1>Manage Stock </h1>



<br/> <br/>
<!---Button to add pizza -->
<a href="<?php  echo SITEURL ;?>admin/add-stock.php" class=" btn-primary">Add Stock </a>



<br/> <br/>

<table class = "tbl_full">
<tr>

<th>Id</th>
<th>Fullname</th>
<th>Username</th>
<th>Actions</th>
</tr>

<tr> 
    <td>1.</td>
    <td>Tseme </td>
    <td>tsemester</td>
    <td>
        <a href="u" class = "btn-secondary">Update Stock</a>
        <a href="u" class = "btn-danger">Delete Stock</a>
    
    </td>
</tr>
<tr> 
    <td>2.</td>
    <td>Tseme </td>
    <td>tsemester</td>
    <td>
    <a href="u" class = "btn-secondary">Update Stock</a>
        <a href="u" class = "btn-danger">Delete Stock</a>
    </td>
</tr>
<tr> 
    <td>3.</td>
    <td>Tseme </td>
    <td>tsemester</td>
    <td>
    <a href="u" class = "btn-secondary">Update Stock</a>
        <a href="u" class = "btn-danger">Delete Stock</a>
    </td>
</tr>
</table>








</div>


</div>


<?php include('partials/footer.php'); ?>
