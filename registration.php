
  
<?php
    include ('header.php');
?>
<div class="body">
<div class="wrapper">
  	<div class="registration_form">
	  <p style="text-align:right;" >
      <button  type="button" onclick="window.location='index.php'" class="close" class="btn.close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="fw-bold">&times;</span>
        </button>
      </p>
		<div class="title">
			Registration...
		</div>

		<form action="#" method="post">
			<div class="form_wrap">
				
					<div class="input_wrap">
						<label>Name</label>
						<input type="text" name=name required>
				</div>
        <div class="input_wrap">
						<label>Address</label>
						<textarea type="text" name=addr required></textarea>
				</div>
        <div class="input_wrap">
						<label>City</label>
						<input type="text" name=city required>
				</div>

        <div class="input_wrap">
						<label>PinCode</label>
						<input type="text" name=pin maxlength=6 required>
				</div>

        <div class="input_wrap">
						<label>Contact No.</label>
						<input type="text" name=cno maxlength=10 required>
				</div>

        <div class="input_wrap">
					<label>Gender</label>
					<ul>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="male" class="input_radio" >
								<span>Male</span>
							</label>
						</li>
						<li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="female" class="input_radio" checked>
								<span>Female</span>
							</label>
						</li>
            <li>
							<label class="radio_wrap">
								<input type="radio" name="gender" value="Other" class="input_radio">
								<span>Other</span>
							</label>
						</li>
					</ul>
				</div>

				<div class="input_wrap">
					<label>Email</label>
					<input type="text" name="email" required>
				</div>
				
				<div class="input_wrap">
					<label>Password</label>
					<input type="password" name="pwd" required>
				</div>

				<div class="input_wrap">
					<label for="city">Confirm Password</label>
					<input type="password" name="cpwd" required>
				</div>
        
				<button class='btn' name='submit' style='font-size:24px; margin-left:80px;'>Register Now.. <i class='fa fa-sign-in'></i></button>
				 
				 
				
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>
	
	<?php
     if(isset($_POST["submit"]))
     {
        include("connection.php");
         $name = $_POST["name"];
         $addr = $_POST["addr"];
         $city = $_POST["city"];
         $pin = $_POST["pin"];
         $cno = $_POST["cno"];
         $gender = $_POST["gender"];
         $email = $_POST["email"];
         $pwd = $_POST["pwd"];

         if(mysqli_query($link, "insert into regi values ('$name', '$addr', '$city', $pin , $cno, '$gender' , '$email', '$pwd', 'U')"))
         {
             echo "<script>alert('Registerd successfully!!!!!!');</script>";
         }
         else
             echo "<script>alert('Not Registerd!!!!!!');</script>";
     }
 ?>
	

<?php
	include("footer.php");
?>