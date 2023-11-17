<?php
if($_SERVER['REQUEST_METOD'] === 'POST') {
    if(isset($_POST['sumbit_button'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username === 'example_user' && $password === 'example_password') {
            echo "Login successful";
        } else {
            echo "Invalid username or password";
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pkl</title>
</head>
<body>
    <div>
        <form method="post" action="/action_page.php">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value="John"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value="Doe"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>