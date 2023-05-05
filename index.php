<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <div class="title text-center">
            <h1>STRONG PASSWORD GENERATOR</h1>
            <h2>Genera una password sicura</h2>
        </div>
            <?php
                $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@!?';
                $pass = []; 
                $userNumber = $_GET["password"];
                $combLen = strlen($comb) - 1; 
                if (isset($_GET["password"])) {
                    for ($i = 0; $i < $userNumber; $i++) {
                        $n = rand(0, $combLen);
                        $pass[$i] = $comb[$n];
                    }
                    print(implode($pass)); 
                    echo $pass;
                }
            ?>

        <form action="index.php" method="GET">
            <div class="mt-5">
                <label for="password">Lunghezza password</label>
                <input type="text" name="password" id="password">
            </div>
            <button type="submit">Genera</button>
        </form>
    </div>
</body>
</html>