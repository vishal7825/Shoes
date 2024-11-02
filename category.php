
<?php
      include ('header.php');
      include("connection.php");
     
?>
<br><br>

      <!-- categories -->
      <div  class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 align=center class="fw-bold" style="font-family: Book Antiqua; color: #003f6b">Category</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="our_products">
                     <div class="row">


                     <?php
                    
                        if(mysqli_num_rows($category) > 0)
                        {
                           foreach($category as $item)
                           {
                              ?>
                               <div class="col-md-4 margin_bottom1 ">

                                

                                 <div class="product_box  ">
                                    <figure><img style="width:200px ; height:150px;" src="uploads/<?= $item['image'] ?>" alt="<?= $item['name'] ?>"  /></figure>
                                    <h3><?= $item['name'] ?></h3>                             
                                 </div>
                                 </a>
                             </div>                                 
                              <?php
                           }
                        }
                        else
                        {
                           echo "categories not found !!";
                        }


                     ?>

                       
                      
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end products -->
      <?php
         include ('footer.php');
      ?>