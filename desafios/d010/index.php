<?php 
    $ano = date("Y");
    $ano_end = $_REQUEST['ano_end'] ?? '';
    $nascimento = $_REQUEST['nascimento'] ?? '';

    if($nascimento){
        $idade = $ano_end - $nascimento;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1 class="special">Calculando sua idade</h1>
        <form 
        action="<?= $_SERVER['PHP_SELF']?>"
        method="post">
            <label for="ida">
                <span>Em que ano vc nasceu ?</span>
                <input type="number" name="nascimento" id="ida" value="<?= @$nascimento?>">
            </label>
            <label for="iac">
                <span>
                    Quer saber a idade em que ano ? <strong>
                    (Atualmente estamos em <?= $ano ?>)
                    </strong>
                </span>
                <input type="number" name="ano_end" id="iac" value="<?= @$ano?>">
            </label>
            <input type="submit" value="Qual será minha idade ?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $nascimento ?> vai ter <strong><?= @$idade ?> anos</strong> em <?= $ano_end ?>!</p>
    </section>
</body>
</html>