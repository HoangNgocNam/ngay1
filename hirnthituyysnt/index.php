<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" id="mun">
    <input type="submit" value="hien thi"">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $input = $_POST["num"];
        $count = 0;
        if ($count < 2){
            return false;

            for ($i = 2; $i < $input; $i++){
                if ($input % $i === 0){
                    return false;
                }
            }
            return true;
        }
    }

    ?>
</form>
</body>
</html>

