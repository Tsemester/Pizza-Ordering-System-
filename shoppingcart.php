
 
<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shopping Cart </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
 
</head>

<body>
  <!-- Navbar start -->
  
  
  <!---Nav Section Starts Here -->
 <?php include('Partials-Front/menu.php'); ?>
  
  <!-- Navbar end -->

  <div class=" navbar">

  <!-- Displaying Products Start -->
  <div  class="">
    <div class ="" id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM tbl_category');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
             $image_name=$row['image_name'];
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2 ">
        <div class="card-deck ">
          <div class="card p-2 border-secondary mb-2 ">

           
                 <?php 
                          if($image_name=="")
                          {

                   
                             echo  "<div class='error'> Image Not Available .</div> ";
                          }

                          else{
                               ?>
                                
                                 
                                 <img src=" admin/stuffimages/<?php echo $image_name ;?>"  alt="" class="img-responsive  img-curve" class="card-img-top" height="250">
                               <?php 


                          }

                        ?>




            
        <!--- <img src= "<? =$row['image_name'] ?>" class="card-img-top" height="250">  ---->
            <div class="card-body p-1 ">
              <h4 class="card-title text-center text-info"><?= $row['title'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas"  ></i>P&nbsp;<?= number_format($row['price'],2) ?></h5>

            </div>
            <div class="card-footer p-1 ">
              <form action="" class="form-submit">
                <div class="row p-2">
                  <div class="col-md-6 py-1 pl-4">
                    <b>Quantity</b>
                  </div>
                  <div class="col-md-6">
                    <input type="number" class="form-control pqty" value="<?= $row['quantity'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['description'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['image_name'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['pcode'] ?>">
                
               
                <button  class="btn-primary btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

</div>
</body>

</html>
<?php include('Partials-Front/footer.php'); ?>