<section>
<nav class="navbar bottom navbar-expand-lg navbar-dark" style="background-color:rgb(0,0,0,.8);">
<div class="container-fluid">
    <div id="banner">
  
         <?php echo '<image src="Logo\logo.png" class="d-block w-90" alt="..." height="90" />'; ?>
     </div>

  <div class="container-fluid">
   
    <div class="row">
              <div class="col-lg-6" style="font-family: lato; font-size: 25px; color:white; padding:30px; align:center;">
                Copyright © 2023, ShoesPlaza 
              </div>
              <div class="col-lg-6" style="text-align: right; font-family:lato; font-size: 30px; color:white;">
                Developed by : Jagruti Sakariya <br>
                         & Jenisha Sakariya
              </div>
          </div>
  </div>
</div>
</nav>
</section>
<script>

  $(document).ready(function(){
    $("#brand").change(function(){
      let scid = $("#brand").val();
      let cid = $("#cid").val();
      let xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){
        if(xhttp.readyState==4 && xhttp.status==200)
        {
          $("#products").html(xhttp.responseText);
        }
      };
      xhttp.open("GET", "productCheck.php?scid=" + scid + "&cid=" + cid, true);
      xhttp.send();
    });


    $("#btnIncre").click(function(){
     
      $("#qty").val(parseInt($("#qty").val())+1);
    });
    $("#btnDecre").click(function(){
      if(parseInt($("#qty").val()) > 1)
      $("#qty").val(parseInt($("#qty").val())-1);
    });
  });



</script>
</body>
</html>