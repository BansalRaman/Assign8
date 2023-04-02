<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php
        ini_set('display_errors', 1);
        error_reporting(-1);
        $conn = mysqli_connect('localhost', 'root', 'V', 'raman');
        // Check connection
        if ($conn === false) {
            echo 'ERROR: Could not connect. ';
            die('ERROR: Could not connect. ' . mysqli_connect_error());
        }

        // Taking all 4 values from the form data(input)
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $cnfpassword = $_REQUEST['cnfpassword'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
        // Performing insert query execution
        // here our table name is college
        if(strlen($password)<10){
            echo "password must be atleast 10 character";
            exit();
        }
        if($cnfpassword === $password)
        {$sql = "INSERT INTO user(fname, lname , email, password) VALUES ('$fname',
			'$lname','$email','$password')";}
        else
        {
            echo "password not matched";
            exit();
        }
        // mysqli_query($conn, $sql);
        if (mysqli_query($conn, $sql)) {
            echo '<h3>data stored in a database successfully.<br/>' .
                ' Please browse your localhost php my admin' .
                ' to view the updated data</h3>';
            echo '<br/>Connected successfully  ';

            echo nl2br(
                "\n\n\n\nFirst Name - $fname\n\n Last Name - $lname\n\n Email - $email\n\n Password - $password\n\n\n\n "
            );
        } else {
            echo '<h3>data stored in </h3>';
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
        <form action="login.php">
            <button type="submit">
                login page
            </button>
        </form>
    </center>

</body>

</html>