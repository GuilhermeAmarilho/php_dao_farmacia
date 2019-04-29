<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h2>Pesquisar Medicamentos pelo nome</h2>
        <form action="" method="post">
            <label for="nome">Digite o nome do medicamento</label>
            <input name="nome" type="text">
            <button type="submit">Pesquisar</button>
        </form>
        <br>
        <table border="1">
            <tr>
                <td><b>Cod</b></td>
                <td><b>Nome</b></td>
                <td><b>Fabricante</b></td>
                <td><b>Controlado</b></td>
                <td><b>Quantidade</b></td>
                <td><b>Preço</b></td>
            </tr>
            <?php
                include_once("medicamento.php");
                include_once("dao.php");
                if (isset($_POST['nome'])) {
                    $dao = new medicamentoDAO();
                    $lista = $dao->listarNome($_POST['nome']);
                    foreach ($lista as $r){
                        echo "<tr><td>".$r->getCod()."<tr><td>".$r->getNome()."</td><td>".$r->getFabricante()."</td><td>".$r->getControlado()."</td><td>".$r->getQuantidade()."</td><td>".$r->getPreco()."</td>".
                        "</tr><br/>";
                    }
                    $db->con_close();
                }
            ?>
        </table>
        <br>
        <a href="index.php">Voltar</a>
    </body>
</html>