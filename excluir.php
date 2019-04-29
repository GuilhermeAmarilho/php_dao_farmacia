<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Excluir medicamento</h2>
    <form action="" method="post">
        <label for="cod">Informe o cod do medicamento</label>
        <input type="text" name="cod">
        <button type="submit">excluir!</button>
    </form>
</body>
</html>
<?php
    try{
        include_once("medicamento.php");
        include_once("dao.php");
        $a = $_POST['cod'];
        $dao = new MedicamentoDAO();
        $dao->remover($a);
        if(isset($_POST['nome'])){
            echo "O medicamento foi removido com sucesso!";
        }
    }
    catch(exception $e){
        echo "Erro! Tente novamente";
    }
?>