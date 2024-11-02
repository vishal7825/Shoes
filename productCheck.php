<?php
  include("connection.php");
  if(isset($_GET["scid"]))
  {
    $cid=$_GET["cid"];
    $scid=$_GET["scid"];
    echo "<input type=hidden id='cid' value='$cid'>";
    if($_GET["scid"]=="All")
    {
      $result = mysqli_query($link, "select pro_id, product.pro_img image, product.pro_name, product.cid, 
      product.sc_id, product.pro_img, category.name cname, subcategory.name scname from product, category, 
      subcategory  where product.cid=$cid and product.cid=category.cid and product.sc_id=subcategory.sc_id");
      
    }
    else
    {
      $result = mysqli_query($link, "select pro_id, product.pro_img image, product.pro_name, product.cid, 
      product.sc_id, product.pro_img, category.name cname, subcategory.name scname from product, category, 
      subcategory  where product.cid=$cid and product.sc_id=$scid and product.cid=category.cid and product.sc_id=subcategory.sc_id");
      
    }
    

  
        while($data=mysqli_fetch_array($result)){
            echo "<div class='col-lg-4 col-md-6 p_box' align=center> <a href='addToCrt.php?pro_id=$data[0]'>";
            echo "<div class='p_border'>";
          
            echo "<img src='image/" . $data["cname"] . "/" . $data["scname"] . "/" .$data["image"] . "' width='60%'>";
                //echo "<img src="uploads/man.png" height="50%" alt=""><br>
            echo "<br><br>";
            echo"</a>";
            echo "<div class='p_nm fw-bold'>" . $data["scname"] . "<br>" . "</div>";
            echo "</div>";
            echo "</div>";
        }
      
  }
  
?>
