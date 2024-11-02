 
<?php
    include ('header.php');
?>

<div class="body">
<div class="wrapper">
  	<div class="registration_form">
		<div class="button">
	  <p style="text-align:right; border-radius:50%;">
       <button type="button" onclick="window.location='index.php'" class="close" class="button.close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="fw-bold">&times;</span>
        </button>
      </p>	
</div>
	<div class="title">
			Login...
		</div>

		<form action="#" method="post">
			<div class="form_wrap">
			<div class="input_wrap">
					<label>Email</label>
					<input type="text" name="email" required>
				</div>
				
				<div class="input_wrap">
					<label>Password</label>
					<input type="password" name="pwd" required>
				</div>

                <button class='btn' name='submit' style='font-size:24px; margin-left:100px;'>Login Now.. <i class='fa fa-sign-in'></i></button>
				 
				<br><br>
                <p class="mb-5 pb-lg-2" style="color: #000000;">Don't have an account? <a href="registration.php"
                      style="color: #000000;">Register here</a></p>
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
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

        include("connection.php");
        $result = mysqli_query($link, "select email, pwd from regi where email='$email'");
        if(mysqli_num_rows($result)>0)
        {
            $data = mysqli_fetch_array($result);
            if($data[1] == $pwd)
            {
                $_SESSION["un"]=$email;
                 echo "<script>window.location.assign('index.php')</script>";
            }
            else
            {
                echo "<script>alert('Wrong password!!');</script>";
            }
        }
        else
        {
            echo "<script>alert('Username not found!!');</script>";
        }
    }
?>


<?php
	include("footer.php");
?>