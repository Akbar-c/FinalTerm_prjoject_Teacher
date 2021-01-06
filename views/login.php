<?php
    require_once '../controllers/userController.php';
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <center><h1>Login</h1></center>
        <center>
        <form action="" method="post" onsubmit="return doLoginValidation()">
            <input type="text" id="username" placeholder="Username" name="username"><span id="err_username" style="color:red;"></span><br>
            <input type="password" id="password" placeholder="Password" name="password"><span id="err_password" style="color:red;"></span><br>
            <input type="submit" name="login" value="Login">
        </form>
        </center>
        <script src="../validate/validate.js"></script>
    </body>
</html>