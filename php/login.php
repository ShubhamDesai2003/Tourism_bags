<?php
session_start();

include("connection.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($password) && !is_numeric($user_name)) {

        $query = "select * from admin where name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                // Password check
                if ($user_data['pass'] === $password) {

                    header("Location: admin.php");
                    die;
                } else {
                    // Wrong password
                    echo "<p id='err'>Wrong password</P>";
                }
            }
        }

    } else {
        // Invalid input
        echo "<p id='err'>Invalid input</P>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./login.css">
    <!-- <script src="./src/redirect.js"></script> -->

</head>

<body>
    <div id="box" class="wrapper">
        <form method="post">
            <h1>Login</h1>

            <div class="input-box">
                <input type="text" placeholder="Username" name="user_name" autocomplete="off"><br><br>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="password"><br><br>
            </div>

            <button type="submit" class="btn">Login</button>


        </form>

    </div>


</body>

</html>