
<?php
  include("header.php");
  include("connection.php");
?>

<div class="container">
  <div class="row" id="products">
   <?php
        $pro_id=$_GET["pro_id"];
        $result = mysqli_query($link, "select pro_id, product.pro_img image, product.pro_name, product.cid, 
        product.sc_id, product.pro_img, product.size, product.price, product.des, category.name cname, subcategory.name scname from product, category, 
        subcategory  where product.pro_id=$pro_id and product.cid=category.cid and product.sc_id=subcategory.sc_id");
        $data= mysqli_fetch_array($result);
       
       //for image in product details section

        echo "<div class='col-lg-6 col-md-6 p_box' align=center>";
        echo "<div class='p_border'>";
            echo "<img src='image/" . $data["cname"] . "/" . $data["scname"] . "/" .$data["image"] . "' width='80%'>";
        echo "</div>";
        echo "</div>";
       
        //end for image in product details section

          //for details in product details section
        echo "<div class='col-lg-6 col-md-6 p_box'>";
        echo "<div class='p_border cbox';
        '>";
        echo "<form action='#' method='post'>";

        echo "<div class='h2'>" . $data["pro_name"] . "</div>";
        echo "<input type=hidden name=pid value=" . $data["pro_id"] . ">";
       
        echo  "<label class='lbl'> Price : </label>";
        echo $data["price"]."<br>";
        echo "<input type=hidden name=price value=" . $data["price"] . ">";

        echo  "<label class='lbl'> Size : </label>";
        echo $data["size"]."<br>";
        echo "<input type=hidden name=size value=" . $data["size"] . ">";


        
           echo  "<label class='lbl'>Quantity:  </label>";
            echo "<div class='input-group mb-3' style='width:150px; margin-left: 160px;'>";
               echo "<input type=button id='btnDecre' class='input-group-text decrement-button' value= '-'>";
                echo "<input id='qty' name='qty' type='text' class='form-control input-qty text-center bg-white' value='1'>";
                echo "<input type=button  id='btnIncre' onclick='incrementValue()' class='input-group-text increment-button' value= '+'>  ";
           echo "</div>";  
        
        echo "<input type='submit' class='btn' name='cart' style='font-size:24px' value='Add To Cart'></form><br>";

        echo "<hr class='hr'>";

        echo " <lable class='lbl'> Description : </lable> ";
        echo "<p class='p'>" . $data["des"]."</p>";

        echo "</div>";
        echo "</div>";
 
          //end for details in product details section
 ?>
  </div>
</div>

<?php

if(isset($_POST["cart"]))
   {
       if(!isset($_SESSION["un"]))
       {
         
         echo "<script>alert('You must have to login first!!!');</script>";
         echo "<script>window.location.assign('log.php');</script>";
       }
       else
       {
        $pro_id=$_POST["pid"];
        $qty = $_POST["qty"];
        $email=$_SESSION["un"];
        $size=$_POST["size"];
        $price=$_POST["price"];
        
        if(mysqli_query($link,"insert into cart (pro_id, email, qty, size, tdate, price) 
        values($pro_id,'$email',$qty,$size,'" . date("Y/m/d") . "',$price)"))
        {
      
          echo "<script>alert('successfully added to cart');</script>";
          echo "<script>window.location.assign('product.php')</script>";
        }
        else
        {
          echo "<script>alert('Something is wrong....!!! ');</script>";
          //echo "<script>window.location.assign('product.php')</script>";
        }
       
      }
   }

?>


<?php
  include("footer.php");
?>