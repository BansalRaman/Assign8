<head>
    <script type="text/javascript">
    var baseUrl = 'http://localhost/raman/';

    function ConfirmDelete() {
        if (confirm("Delete Account?"))
            location.href = baseUrl + '/delete.php';
    }
    </script>


</head>
<?php
session_start();
ini_set('display_errors', 1);
error_reporting(-1);
// include 'login_chk.php';
// echo 'je';
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$email = $_SESSION['email'];
// echo $empID;
?>
<html>

<body>
    <center>
    <h3>
        First Name :
        <?php
        echo($fname);
        ?>
    </h3>
    <h3>
        Last Name : 
        <?php
        echo($lname);
        ?>
    </h3>
    <h3>
        Email :
        <?php
        echo($email);
        ?>
        <br>
        <br>
    </h3>
    <form action="change.php" method="post">
        <h3><label for="fname">First Name :</label>

            <input type="text" name="fname" placeholder="Enter First Name"><br>
        </h3>
        <h3>
            <label for="lname">Last name : </label>
            <input type="text" name="lname" placeholder="Enter Last Name"><br>
        </h3>
        <br>
        <button type="submit">Change</button>
    </form>
    <br>
    <br>
    <h3>For changing the password</h3>
    <form action="change_pswd.php" method="post">
        <h3><label for="password">Password : </label>

            <input type="password" name="password" placeholder="Enter Password"><br>
        </h3>
        <h3><label for="cnfpassword"> Confirm Password : </label>

            <input type="password" name="cnfpassword" placeholder="Re-enter Password"><br>
        </h3>
        <br>
        <button type="submit">Change Password</button>
    </form>
    </center>
</body>

</html>