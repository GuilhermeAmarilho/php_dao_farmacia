<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h2>Lista Total Por Preços</h2>
        <table border="1">
            <tr>
                <td><b>Cod</b></td>
                <td><b>Nome</b></td>
                <td><b>Fabricante</b></td>
                <td><b>Quantidade</b></td>
                <td><b>Preço</b></td>
            </tr>
            <?php
                include_once("medicamento.php");
                include_once("dao.php"); 
                $dao = new MedicamentoDAO();
                $medicamento = $dao->listaPreco();
                foreach ($medicamento as $r){
                    echo "<tr><td>".$r->getNome()."</td>"."<td>".$r->getFabricante()."</td>"."<td>".$r->getControlado()."</td>"."<td>".$r->getQuantidade()."</td>"."<td>".$r->getPreco()."</td>"."</tr><br/>";
                }
            ?>
        </table>
        <a href="index.php">Voltar</a>
    </body>
</html>