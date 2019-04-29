<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <h2>Cadastre um medicamento </h2>
    <form action="" method="post">
        <label for="nome">Informe o nome do medicamento</label>
        <input name="nome" type="text">
        <label for="fab">Informe o nome do fabricante</label>
        <input name="fab" type="text">
        <br>
        <label for="con">O medicamento é controlado?</label>
        <select name="con">
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select>
        <br>
        <label for="qt">Informe a quantidade</label>
        <input name="qt" type="number">
        <br>
        <label for="preco">Informe o preco</label>
        <input name="preco" type="number">
        <br>
        <input type="submit">
    </form>
    <a href="index.html">Voltar</a>
    </body>
</html>
<?php
    try{
        include_once("medicamento.php");
        include_once("dao.php");
        $a = new Medicamento($_POST['nome'],$_POST['fab'],$_POST['con'],intval($_POST['qt']),intval($_POST['preco']));
        $dao = new MedicamentoDAO();
        $dao->inserir($a);
        if(isset($_POST['nome'])){
            echo "O medicamento foi inserido com sucesso!";
        }
    }
    catch(exception $e){
        echo "Erro! Tente novamente";
    }
    echo "<br><br>";
    echo "<a href='index.html'>voltar a pag inicial</a>";
?>