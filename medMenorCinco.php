<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h2>Medicamentos inferiores a 5 no estoque.</h2>
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
                $dao = new MedicamentoDAO();
                $medicamento = $dao->listarEstoque(5);
                foreach ($remedio as $r){
                    echo "<tr><td>".$r->getCod()."</td>"."<td>".$r->getNome()."</td>"."<td>".$r->getFabricante()."</td>"."<td>".$r->getControlado()."</td>"."<td>".$r->getQuantidade()."</td>"."<td>".$r->getPreco()."</td>"."</tr>";
                }
            ?>
        </table>
        <a href="index.php">Voltar</a>
    </body>
</html>