<html>

<head>
<link rel="stylesheet" href="css/orderStyle.css">
</head> 


        <!--the actual body-->
        <body>
        <?php include('Partials-Front/menu.php'); ?>
    <section>
        <div class="container">
        <h1 id="place">PLACE YOUR ORDER !</h1>

        

        <!-- the customized section has nested checkboxes that users can choose from-->

    <ul id="MyUl">
        <li><span class="box"><h1>Customize Your Pizza</h1><br><br></span>
            <ul class="nested">
                <h2 id="about">Shapes</h2>
                <form action="">
                    <input type="checkbox" value="Square">
                            <label for="Square">Square</label>
                            <input type="checkbox" value="Rectangle">
                            <label for="Rectangle">Rectangle</label>
                            <input type="checkbox" value="Triangle">
                            <label for="Triangle">Triangle</label>
                            <input type="checkbox" value="Ellipse">
                            <label for="Ellipse">Ellipse</label>
                            <input type="checkbox" value="Circular">
                            <label for="Circular">Circular</label>
                            </form>
    
                <br>
                <h2 id="about">Crest</h2>
                <form action="">
                <input type="checkbox" value="Thin Crest">
                        <label for="Thin crest">Thin crest</label>
                        <input type="checkbox" value="Thick crest">
                        <label for="Thick crest">Thick crest</label>
                        <input type="checkbox" value="stuffed">
                        <label for="stuffed">Stuffed</label>
                        <input type="checkbox" value="Edge-stuffed">
                        <label for="Edge-stuffed">Edge-stuffed</label>
                        </form>
<br>
                <h2 id="about">Herbs & Spices</h2>
                <form action="">
                <input type="checkbox" value="Basil">
                <label for="Basil">Basil</label>
                <input type="checkbox" value="Black Pepper">
                <label for="Black Pepper">Black Pepper</label>
                <input type="checkbox" value="Pasley& rosemary">
                <label for=" Pasley & rosemary">Pasley & Rosemary</label>
                <input type="checkbox" value="Paprika">
                <label for="Paprika">Paprika</label>
                </form>
                       
                <br>
                <h2 id="about">Toppings</h2>
                <form action="">
                <input type="checkbox" value="without toppings">
                <label for="Without toppings">Without Toppings</label>
                <input type="checkbox" value="extra cheese">
                <label for="extra cheese"> Extra Cheese</label>
                <input type="checkbox" value="extra pepperoni">
                <label for="extra pepperoni">Extra Pepperoni</label>
                <input type="checkbox" value="extra olives">
                <label for="extra olives">Extra Olives</label>
                </form>
                

                       
                <br>
                <h2 id="about">Additional Items</h2>
                <form action="">
                <input type="checkbox" value="Pasta">
                        <label for="Pasta">Pasta</label>
                        <input type="checkbox" value="garlic bread">
                        <label for="garlic bread">Garlic Bread</label>
                        <input type="checkbox" value="gingerbread">
                        <label for="gingerbread">Ginger Bread</label>
                       
                       
                </form>
                
                          
                <br>
                <h2 id="about">Delivery Options</h2>
                <form action="">
                <input type="checkbox" value="Pickup">
                                <label for="Pickup">Pickup</label>
                                <input type="checkbox" value="Deliver">
                                <label for="Deliver">Deliver</label>
                </form>


                </form>
                
                          
                <br>
                <h2 id="about">Quantity</h2>
                <form action="">
                <textarea type="comment" class="form-control z-depth-1"  maxlength="500" rows="3" cols="20" 
                    placeholder="Fill In Your Quantity" ></textarea><br> <br>
</form>
            </ul>
             
</li>   
            </ul>
        </li>                   
    </ul>

       
       <script>
var toggler = document.getElementsByClassName("box");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("check-box");
  });
}
</script>  



<br><br>
<input type="submit" name="submit" value="Submit Your Customized Order" class="btn btn-primary">
        </div>
       
    </section>

 
<?php include('Partials-Front/footer.php'); ?>    
</body>
</html>