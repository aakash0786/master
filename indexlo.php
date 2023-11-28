<?php
include('loginconfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Log In</title>
    <link rel="stylesheet" href="styling\index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div calss="clssform">
        <form method="post">
            <div class="classnpt">
                <h1>𝓘𝓷𝓼𝓽𝓪𝓰𝓻𝓪𝓶</h1>
                <input type="text" name="userName" placeholder="Username">
                <input type="password" name="userPass" placeholder="Password">
                <input type="submit" name="userLogin" value="Log In" class="btn">
            </div>
            <div class="socialIcon">
                <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                <a href="https://www.facebook.com">
                    <p>Log in with Facebook</p>
                </a>
                <h5>Forgot password ?</h5>
            </div>
        </form>
    </div>
    <div class="SignUp">
        <a href="signup.php">
            <p>Don't have an account? Sign up</p>
        </a>
    </div>

</body>

</html>