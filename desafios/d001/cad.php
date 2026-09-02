<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor de n</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET["numero"] ?? 0;
    ?>
    <main>
        <h1>Resultado final</h1>
        <p>
            O número escolhido foi 
            <strong><?=$numero?></strong> !
        </p>
        <p>
            O seu antecessor 
            <strong><?=$numero-1?></strong>
        </p>
        <p>
            O seu sucessor 
            <strong><?=$numero+1?></strong>
        </p>

        <button>
            <a 
                href="javascript:history.go(-1)" style="color: inherit;">
                Voltar
            </a>
        </button>
    </main>
</body>
</html>