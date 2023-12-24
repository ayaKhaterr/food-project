<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: indexfood.php");
}

?>



<!DOCTYPE html>
<html>
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-compatible" content="IE=edge">
     <meta name= "viewport" content="width=device-width, initial-scale=1.0">
     <title>ISTANBUL Login</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!--style2 link-->
     <link rel ="stylesheet" href="./index2.css">
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet">
   
  

    </head>
   <body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
            $User_email = $_POST["useremail"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE User_email = '$User_email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: indexfood.php");

                    die();
                }else{
                    echo "<div class='alert alert-danger'>passsword does not match</div>";
                }

            }else{
                echo "<div class='alert alert-danger'>emai does not match</div>";
            }
        }
        ?>





        <form action="indexl.php" method="post">
            <div class="input-box">
                <input type="email" placeholder="enter email" name="useremail" class="form-control">
            </div>
            <div class="input-box">
                <input type="password" placeholder="enter password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="LOGIN" name="login" class="btn btn-primary">
            </div>
        </form>
        <div><p>Not Registered Yet <a href="index2.php">Register Here</a></p></div>
    </div>

   </body>
</html
