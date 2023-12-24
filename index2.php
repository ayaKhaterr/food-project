
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
     <title>ISTANBUL Registeration</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!--style2 link-->
     <link rel ="stylesheet" href="./index2.css">
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet">
   
  

    </head>
   <body>
    <!--Header start-->
    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
            $User_name =$_POST["username"];
            $User_email =$_POST["useremail"];
            $password =$_POST["password"];
            $passwordrepeat =$_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();
            if (empty($User_name) OR empty($User_email) OR empty($password) OR empty ($passwordrepeat)) {
                array_push($errors,"All fields are required");
            }
            if (!filter_var($User_email,FILTER_VALIDATE_EMAIL)) {
                array_push($errors,"Email is not valid");
            }
            if (strlen($password)<8) {
                array_push($errors,"Password must be at least 8 charactes long");
            }
            if ($password!==$passwordrepeat) {
                array_push($errors,"password does not match");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE User_email ='$User_email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors,"email is already exists");
            }

            if (count($errors)>0) {
                foreach ($errors as $error) {
                    echo"<div class='alert alert-danger'>$error</div>";
                }
            }else{
                
                $sql = "INSERT INTO users (User_name, User_email, password) VALUES ( ?, ?, ? )";
                $stmt = mysqli_stmt_init($conn);
                 $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                 if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt,"sss",$User_name,$User_email,$passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>you are registered successfully.</div>";
                 }else{
                    die("something went wrong");
                 }
            }

        }
        ?>
        <form action="index2.php" method="post" >
            <h2>Registeration</h2>
            <div class="input-box">
                <input type="text" class="form-control" name="username" placeholder="User name"  required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="text" class="form-control" name="useremail" placeholder="User email"  required>
                
            </div>
            
            <div class="input-box">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <i class="bx bxs-lock-alt"></i>

            </div>
            <div class="input-box">
                <input type="text" class="form-control" name="repeat_password" placeholder="repeat_Password" required>
                <i class="bx bxs-lock-alt"></i>
            </div>

            
            <div class="input-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
                
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="indexl.php">Login Here</a></p></div>
        </div>
    </div>
   </body>
</html>