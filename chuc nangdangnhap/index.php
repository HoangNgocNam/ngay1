<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .login{
            width:280px;
            margin: 0px;
            padding: 10px;
            border: 1px #ccc solid;
        }
        h2{
            text-align: center;
        }
        .login input {
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div class="login">
        <h2>Login</h2>
        <label> Username: <input type="text" name="Username" size="30"  placeholder="Nhap ten vao day nhe"></label>
        <label> Password: <input type="password" name="password" size="30" placeholder="password"></label>
        <button type="submit"> Sing in </button>
    </div>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h3> Welcome <span style = 'color: red'>" .$username. "</span> to Website </h3>";

    } else {
        echo "<h3><span style = 'color: red'> Login Error</span></h3>";
    }
}
?>
