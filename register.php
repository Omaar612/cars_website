<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="./style.css">
     <link rel="stylesheet" href="./style2.css">  
</head>
<body>
    <div class="container">
        <?php
            if (isset($_POST["submit"])) {
                $_fullName = $_POST["fullname"];
                $_email = $_POST["email"];
                $_password = $_POST["password"];
                $_passwordRepeat = $_POST["repeat_password"];

                $passwordHash = password_hash($_password , PASSWORD_DEFAULT);

                $_errors = array();

                if (empty($_fullName) OR empty($_email) OR empty($_password) OR empty($_passwordRepeat)) {
                    array_push($_errors, "All fields are required");
                }
                if (!filter_var($_email , FILTER_VALIDATE_EMAIL)) {
                    array_push($_errors , "Email isn't valid");
                }
                if(strlen($_password)<8){
                    array_push($_errors , "password must be atleast 8 characters long");
                }
                if ($_password !== $_passwordRepeat) {
                    array_push($_errors , "password doesn't match");
                }

                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = '$_email'";
                $result = mysqli_query($conn , $sql);
                $rowCount = mysqli_num_rows($result);
                if($rowCount > 0){
                    array_push($_errors, "Email already exists");
                }

                if (count($_errors) > 0) {
                    foreach ($_errors as $_error) {
                        echo "<div class='alert-danger'>$_error</div>";
                    }
                }else{

                    $sql = "INSERT INTO users (full_name ,email, password) VALUES (?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $preparestmt = mysqli_stmt_prepare($stmt,$sql);
                    if ($preparestmt) {
                        mysqli_stmt_bind_param($stmt,"sss",$_fullName,$_email,$passwordHash);
                        mysqli_stmt_execute($stmt);
                         echo "<div class='alert-success'>You registered successfully</div>";
                         header("Location: index.php");
                         die();
                    }else{
                        die("Something went wrong");
                    }
                }
            }
        ?>


        <form action="register.php" method="post">
           <div class="form-group">
            <input type="text" class="form-control" name="fullname" placeholder="enter your fullname:">
           </div>
           <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="enter your email:">
           </div>
           <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="enter your password:">
           </div>
           <div class="form-group">
            <input type="password" class="form-control" name="repeat_password" placeholder="repeat your password:">
           </div>
           <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="register" name="submit">
           </div>
        </form>
        <div>
             <div class="text"><p>already have an account <a href="login.php">login here!</a></p></div>
        </div>
    </div> 
</body>
</html>