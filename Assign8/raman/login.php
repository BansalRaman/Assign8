<?php
ini_set('display_errors', 1);
error_reporting(-1);

?>
<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

</head>

<body>
    <center>

        <form action="login_chk.php" method="post">

            <h1>LOGIN</h1>
            <br/>

            <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

            <?php } ?>

            <label>Email : </label>

            <input type="text" name="email" placeholder="Enter your Email"><br>
            <br>
            <label>Password : </label>
            <input type="password" name="password" placeholder="Enter your password"><br>
            <br>
            <br>
            <button type="submit">Login</button>
            <br>

        </form>
        <br>
        <form action="reg.php">
            <br>
            <button type="submit">
                Register
            </button>
        </form>
    </center>
</body>

</html>