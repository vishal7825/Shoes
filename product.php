<style>
.box{

border-radius : 8px;
border-style: ridge;
color: #003f6b;
width: 50%;
align-items: center;
padding-top: 5px;
background: RGBA(139, 155, 167);
border-color: color|transparent|initial|inherit;
}

  </style>

<?php
  include("header.php");
  include("connection.php");
?>
<br><br><br>
<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6" align=center>
      <a href="product_detail.php?cid=1"><img src="uploads/man.png" height="50%" alt=""></a><br><br>
      <div class="box">
    <h5 class="fw-bold" style="font-family: Book Antiqua; color: #003f6b"> Men's shoes </h5>
    </div>
    </div>
    <div class="col-lg-6 col-md-6" align=center>
    <a href="product_detail.php?cid=2"><img src="uploads/woman.png" height="50%" alt=""></a><br><bR>
     <div class="box">
    <h5 class="fw-bold" style="font-family: Book Antiqua; color: #003f6b"> Women's shoes </h5>
    </div>
    </div>
  </div>
</div>

<br><br><br>
<?php
  include("footer.php");
?>