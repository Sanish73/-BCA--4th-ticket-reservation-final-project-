<?php
if (isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    // $password = trim($_POST['password']);
    $email = trim($_POST['email']);


    include('admin/connection.php');
  
    $sql = "SELECT password FROM users WHERE email = '$email' AND username = '$username'";
    $qry = mysqli_query($conn, $sql) or die("querry is wrond");

    $row = mysqli_fetch_array($qry);

    if ($row) {
        $pass = $row["password"];



        $to =  $email;
        $subject = $username;
        $message = "Password=  ".$pass;

        if (mail($to, $subject, $message)) {
            echo "sent";
        } else {
            echo "not sent";
        }



        // echo ($pass);
    } else {
        echo ("Email OR Password Not Found");
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="" name="signup">
        <fieldset>
            <legend>Send Mail</legend>


            <label> UserName</label>
            <input type="text" name="username" placehoder="username">
            <br />
            <br>
            <lebel>Email</label>
                <input type="email" name="email">
                <br />

                <input type="submit" name="submit" value="Send">

                <a href='signin.php'>signIn</a>
        </fieldset>
    </form>
</body>

</html>