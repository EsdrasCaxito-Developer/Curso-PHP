<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais do PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                session_start();
                $_SESSION['teste'] = 'Funcionou!';

                setcookie("dia-da-semana", "Terça-feira", time()+3600);
            ?>
            <h1>Superglobal GET</h1>
            <?php var_dump($_GET)?>
            
            <h1>Superglobal POST</h1>
            <?php var_dump($_POST)?>
            
            <h1>Superglobal REQUEST</h1>
            <?php var_dump($_REQUEST)?>
            
            <h1>Superglobal COOKIE</h1>
            <?php var_dump($_COOKIE)?>

            <h1>Superglobal SESSION</h1>
            <?php var_dump($_SESSION)?>

            <h1>Superglobal ENV</h1>
            <?php 
                var_dump($_ENV);

                // foreach (getenv() as $key => $value) {
                //     echo "<br> $key - $value";
                // }
            ?>

            <h1>Superglobal SERVER</h1>
            <?php var_dump($_SERVER)?>

            <h1>Superglobal GLOBALS</h1>
            <?php var_dump($GLOBALS)?>
        </pre>
    </main>
</body>
</html>