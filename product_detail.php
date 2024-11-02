<?php
  include("header.php");
  include("connection.php");
?>
<br>
<form action="#" method="POST">
  <center>
        <table>
            <tr >
                <td class="fw-bold" style="font-family: lato; color: #003f6b">Brands : 
               
                    <select id="brand" name="brand" style="font-family: lato; color: #003f6b">
                    <option value="All" name="all" >All</option>
                        <?php
                            $con = mysqli_connect("localhost", "root", "","shoesplaza") or die("Could not connect!");
                            $result = mysqli_query($link, "select sc_id, name from subcategory");
                            while($data = mysqli_fetch_array($result))
                            {
                                echo "<option value='$data[0]'>$data[1]</option>";
                            }
                        ?>
                    </select>
                
                </td>
            </tr>
        </table>
    </center>
   </form>

<div class="container">
  <div class="row" id="products">
                   
    <?php

        $cid=$_GET["cid"];
        echo "<input type=hidden id='cid' value='$cid'>";
        $result = mysqli_query($link, "select pro_id, product.pro_img image, product.pro_name, product.cid, 
        product.sc_id, product.pro_img, category.name cname, subcategory.name scname from product, category, 
        subcategory  where product.cid=$cid and product.cid=category.cid and product.sc_id=subcategory.sc_id");
        
        while($data=mysqli_fetch_array($result)){
            echo "<div class='col-lg-4 col-md-6 p_box' align=center>  <a href='addToCrt.php?pro_id=$data[0]'>";
            echo "<div class='p_border'>";
            echo "<img src='image/" . $data["cname"] . "/" . $data["scname"] . "/" .$data["image"] . "' width='60%'>";
                //echo "<img src="uploads/man.png" height="50%" alt=""><br>
            echo "<br><br>";
            echo"</a>";
            echo "<div class='p_nm fw-bold'>" . $data["scname"] . "<br>" . "</div>";
            
            echo "</div>";
            echo "</div>";
        }
    ?>
 
  </div>
</div>

<?php
  include("footer.php");
?>