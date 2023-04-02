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

    <a href="update.php"><button action="update.php">Update INFO</button></a>

    <br>
    <br>
    
    <?php
    echo '<button type="button" onclick="ConfirmDelete()">DELETE ACCOUNT</button>';?>
    <form action="logout.php">
        <button type="submit">
            Log out
        </button>
    </form>
    </center>
</body>

</html>