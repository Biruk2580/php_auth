<html>
    <head>
     <title>DUILS - Signup</title>   
    <head>
    <body>
        <h2>Signup Here</h2>
        <form action="#" method="POST">
            <fieldset>
                <label for="username">Username: </label>
                <input type="text" name="username"><br>
                <label for="password">Password: </label>
                <input type="password" name="password"><br>
                <label for="role">Role</label>
                <select name="role" id="">
                    <option value="Student">Student</option>
                    <option value="Stuff">Stuff</option>
                </select>
            </fieldset>
            <fieldset>
                <input type="submit" name="signup"><br>
            </fieldset>
            If you have account click <a href="index.php">Login</a>
        </form>
    </body>
</html>
<?php
include "connection.php";
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $date = date('y-m-d');
$sql = "INSERT INTO account(id, username, fullname,password, role, createdOn, Status)
values('','$username' , '$username ', '$password', '$role', '$date', 'Pending');
";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Usser Inserted";
}else{
    echo "User is not registerd";
}
}
?>













<style>
   
    h2{
        text-align: center; 
    }
    form{
        text-align: center;
        margin: 30px;
        margin-top: 20px;
        padding: 10px;
        background-color: grey;
    }
    input{
        padding: 5;
        margin: 5;
    }
</style>