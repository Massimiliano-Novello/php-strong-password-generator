<?php
    session_start();
    include_once  __DIR__ . "./functions.php";
    if(isset($_GET["password"])) {
        $password = $_GET["password"];
        $randomPsw = generatePassword();
        $_SESSION["password"] = $randomPsw;
        header('location: password.php');
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="title text-center">
            <h1>STRONG PASSWORD GENERATOR</h1>
            <h2 class="text-white">Genera una password sicura</h2>
        </div>
        <div class="content">
            <form action="index.php" method="GET">
                <div class="mt-5 d-flex justify-content-between">
                    <label for="password" class="text-white">Lunghezza password:</label>
                    <input type="number" min="5" max="18" name="password" id="password" value="<?echo $_GET["password"]?>">
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Genera</button>
                    <button type="reset" class="btn btn-primary">Annulla</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>