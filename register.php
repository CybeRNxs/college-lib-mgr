<?php
include "db.php";
if($_SERVER['REQUEST_METHOD']== "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "insert into user_tbl(name, email, password, role) values('$name', '$email', '$password', '$role')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Error! : {$result->error}";
    }
    else {
        echo "You have resistered successfully";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
            <title>
                Resistration
            </title>
    </head>
    <body>
        <form action = "resister.php", method="post">
            <input type="text" name="name">
            <input type="email" name="email">
            <input type="password" name="password">
            <input type="text" name="role", value = "User" hidden>
            <button type="submit" >
                sign up
            </button>
        </form>
    </body>
</html>