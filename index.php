<html>
    <head>
     <title>DUILS - Login</title>   
    <head>
    <body>
        <h2>Login Here</h2>
        <form action="#" method="POST">
            <fieldset>
                <label for="username">Username: </label>
                <input type="text" name="username"><br>
                <label for="password">Password: </label>
                <input type="password" name="password">
            </fieldset>
            <fieldset>
                <input type="submit" name="login"><br>
            </fieldset>
            If you have no account click <a href="signup.php">Signup</a>
        </form>
    </body>
</html>
<?php
include "connection.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row['role'] === 'Student') {
            header("Location: Student/index.php");
        }
        if ($row['role'] === 'Stuff') {
            header("Location: Stuff/index.php");
        }else{
            header("Location: Guest/index.php");
        }
    }else{
        echo "Not Vlid user name or password";
        echo $username;
        echo ' '.$password;
    }
}
?>