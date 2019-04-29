<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Dados do medicamento</h2>
    <form action="" method="post">
    <?php
        $cod = $_POST['cod'];
        include_once("medicamento.php");
        include_once("dao.php");
        $dao = new MedicamentoDAO();
        $a = $dao->buscar($cod);
        echo "<label for='cod'>codigo do medicamento</label><input name='cod' value='".$a['cod']."' readonly='true'>";
        echo "<label for='nome'>nome do medicamento</label><input name='nome' value='".$a['nome']."'>";
        echo "<label for='fab'>fabricante do medicamento</label><input name='fab' value='".$a['fabricante']."'>";
        if ($a["controlado"] == 'S'){
            echo "<select name='con'><option selected value='S'>Sim</option><option value='N'>Não</option></select>";
        }
        else{
            echo "<select name='con'><option value='S'>Sim</option><option selected value='N'>Não</option></select>";
        }
        echo "<label for='qt'>quantidade do medicamento</label><input name='qt' value='".$a['quantidade']."' >";
        echo "<label for='preco'>preco do medicamento</label><input name='preco' value='".$a['preco']."' >";
        echo "<button type='submit'>Atualizar!</button>";
    ?>
    </form>
</body>
</html>
<?php
    try{
        $a = new Medicamento($_POST['nome'],$_POST['fab'],$_POST['con'],intval($_POST['qt']),intval($_POST['preco']));
        $a.setCod($_POST['cod']);
        $dao = new MedicamentoDAO();
        $dao->update($a);
        if(isset($_POST['nome'])){
            echo "o medicamento foi atualizado!";
        }
    }
    catch(exception $e){
        echo "Erro! Tente novamente";
    }
?>