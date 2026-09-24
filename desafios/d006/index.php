<?php 
    $dividendo = @$_POST['dividendo'] ?? 0;
    $divisor = @$_POST['divisor'] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section>
        <h1>Anatomia da Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>
                <span>Dividendo</span>
                <input 
                    type="number" 
                    name="dividendo"
                    value="<?= $dividendo ?>">
            </label>
            <label>
                <span>Divisor</span>
                <input 
                    type="number" 
                    name="divisor"
                    value="<?= $divisor ?>">
            </label>
            <input type="submit" value="Atualizar">
        </form>
    </section>
    <?php 
        if($divisor > 0){
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        }
    ?>
    <section>
        <h2>Estrutura da divisão</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=@$resto?></td>
                <td><?=@$quociente?></td>
            </tr>
        </table>
    </section>
</body>