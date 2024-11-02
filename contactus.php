

<?php
    include("header.php");
?>

<section class="contact" id="contact">
        <div class="container">
            <div class="heading text-center">
                <h2>Contact
                    <span> Us </span></h2>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3 class="fw-bold" >Contact details...</h3>
                    </div>
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                           
                            <h4 class="d-inline-block fw-bold">PHONE :
                                <br>
                                <span >+12457836913 , +12457836913</span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                           
                            <h4 class="d-inline-block fw-bold">EMAIL :
                                <br>
                                <span>shoesplaza@info.com</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                       
                            <h4 class="d-inline-block fw-bold">ADDRESS :<br>
                                <span >ShoesPlaza Atkot, 
					                            <br> Rajkot - Bhavanagar High way, Kailashnagar, Atkot</span></h4>
                        </div>
                        <!-- Info-4 -->
                        <div class="info">
                        <div class="col-md-10">        
                          <div class="contact-page-map">
                            <h4 class="d-inline-block fw-bold">MAP :<br><br>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14795.742020058804!2d71.1567228!3d22.01378205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1657861485575!5m2!1sen!2sin"
                                           width="150%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></h4>
                            </div>          
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <form method="post" action="#">
                        <div class="row">
                            
                        <div class='box-user'>
			<input type='email' placeholder="Email" required name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control form-control-lg" style="font-family: Lato; font-size:25; color: #154360;">
		</div>
		<div class='box-user'>
			<textarea type='text' placeholder="Message..." column = 18 required name="msg" class="form-control form-control-lg" style="font-family: Lato; font-size:25; color: #154360;"></textarea>
           
		</div>
        <div>
                        <button class="btn btn-block fw-bold" type="submit" name="submit">Send Now!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
        include("footer.php");
    ?>