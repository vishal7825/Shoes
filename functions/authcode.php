

<?php
session_start();

include '../config/dbcon.php';

  if(isset($_POST['register'])){
      $username=mysqli_real_escape_string($con, $_POST['name']);
      $gender=mysqli_real_escape_string($con, $_POST['gender']);
      $number=mysqli_real_escape_string($con, $_POST['number']);
      $city=mysqli_real_escape_string($con, $_POST['city']);
      $address=mysqli_real_escape_string($con, $_POST['address']);
      $email=mysqli_real_escape_string($con, $_POST['email']);
      $pass1=mysqli_real_escape_string($con, $_POST['pass1']);
      $pass2=mysqli_real_escape_string($con, $_POST['pass2']);

      // $pass=password_hash($pass1 ,PASSWORD_BCRYPT);
      // $cpass=password_hash($pass2 ,PASSWORD_BCRYPT);

      $emailquery =" select * from registration where email='$email'";
      $query=mysqli_query($con,$emailquery);

      $emailcount= mysqli_num_rows($query);

      if($emailcount>0){
        
        ?>
                    <script>
                        alert("Email already registerd");
                        window.location.href="../registration.php";
                    </script>
                <?php
      }
      else{
        if($pass1===$pass2){

          $insertquery="INSERT INTO registration (username, gender, phone, city, address, email, password, cpassword)
          VALUES ('$username','$gender','$number','$city','$address','$email','$pass1','$pass2')";

          $iquery=mysqli_query($con,$insertquery);

          if($iquery){
            ?>
                    <script>
                        alert("inserted successfully");
                        window.location.href="../login.php";
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Not inserted");
                        window.location.href="../registration.php";
                    </script>
                <?php
            }

        }
        else{
          ?>
          <script>
              alert("pleas enter same passwords ");
              window.location.href="../registration.php";
          </script>
      <?php
        }
      }


  }

  else if(isset($_POST['login']))
  {

    $email = mysqli_real_escape_string($con , $_POST['email']);
    $pass1 = mysqli_real_escape_string($con , $_POST['pass1']);

    $login_query = "SELECT * FROM registration WHERE email='$email' AND password = '$pass1' ";

    $login_query_run = mysqli_query($con ,$login_query);
    
    if(mysqli_num_rows($login_query_run) > 0)
    {
     
      
      $_SESSION['auth']=true;


        $userdata= mysqli_fetch_array($login_query_run);

        $userid=$userdata['id'];
        $usname=$userdata['username'];
        $uemail=$userdata['email'];
        
        
        $_SESSION['auth_user']=[
            'user_id' =>$userid,
            'username'=> $usname,
            'email'=> $uemail
    ];

        ?>
        <script>
            alert("login successful");
            location.replace("../index.php");
        </script>
        <?php
     

    }
    else{
      ?>
        <script>
            alert("Invalid email or password !");
            window.location.href="../login.php";
        </script>
        <?php
    }

  }

  ?>

























