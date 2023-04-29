<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="./style.css">
     <link rel="stylesheet" href="./style2.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn , $sql);
            $user = mysqli_fetch_array($result , MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password , $user["password"])) {
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter email" name="email" class="form-control">
            </div>
            <div class="form-group">
            <input type="password" placeholder="Enter Password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn_primary">
            </div>
        </form>
        <div class="text"><p>Don't have an account <a href="register.php">register here!</a></p></div>
    </div>
</body>
</html>