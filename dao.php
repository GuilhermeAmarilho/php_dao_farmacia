<?php
    require_once("medicamento.php");
    class MedicamentoDAO{
        public function criaConexao(){
            $dbhost = "localhost";
            $dbuser = "admin";
            $dbpass = "admin";
            $db = "banco";
            $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            return $conn;
        }
        public function inserir($med){
            $mysqli = $this->criaConexao();
            $script = "INSERT INTO medicamento (nome,fabricante,controlado,quantidade,preco) VALUES (?, ?, ?, ?, ?)";
            $sql = $mysqli->prepare($script);
            $a = array();
            $a = [$med->getNome(),$med->getFabricante(),$med->getControlado(),$med->getQuantidade(),$med->getPreco()];
            $sql->bind_param('sssid', $a[0],$a[1],$a[2],$a[3],$a[4]);
            $sql->execute();
            mysqli_close($mysql);
        }
        public function remover($cod){
            $mysqli = $this->criaConexao();
            $script = "DELETE from medicamento where cod = (?)";
            $sql = $mysqli->prepare($script);
            $sql->bind_param('i',$cod);
            $sql->execute();
            mysqli_close($mysql);
        }
        public function buscar($cod){
            $mysqli = $this->criaConexao();
            $script = "Select * from medicamento where cod = ?";
            $sql = $mysqli->prepare($script);
            $sql->bind_param('i',$cod);
            $sql->execute();
            $linha = $mysql->fetch($sql);
            return $linha;
            mysqli_close($mysql);
        }
        public function listarNome($nome){
            $mysqli = $this->criaConexao();
            $script = "Select * from medicamento where nome like ?";
            $sql = $mysqli->prepare($script);
            $a = "%".$nome."%";
            $sql->bind_param('s',$a);
            $sql->execute();
            $linha = $mysql->fetchone($sql);
            $b = new Medicamento($linha['nome'],$linha['fab'],$linha['con'],intval($linha['qt']),intval($linha['preco']));
            $b.setCod($linha['cod']);
            return $b;
            mysqli_close($mysql);
        }
        public function listarFab($fab){
            $mysqli = $this->criaConexao();
            $script = "Select * from medicamento where fab like ?";
            $sql = $mysqli->prepare($script);
            $a = "%".$fab."%";
            $sql->bind_param('s',$a);
            $sql->execute();
            $linha = $mysql->fetchone($sql);
            $b = new Medicamento($linha['nome'],$linha['fab'],$linha['con'],intval($linha['qt']),intval($linha['preco']));
            $b.setCod($linha['cod']);
            return $b;
            mysqli_close($mysql);
        }
        public function listarCon($con){
            $mysqli = $this->criaConexao();
            $script = "Select * from medicamento where con like ?";
            $sql = $mysqli->prepare($script);
            $a = "%".$con."%";
            $sql->bind_param('s',$a);
            $sql->execute();
            $linha = $mysql->fetchone($sql);
            $b = new Medicamento($linha['nome'],$linha['fab'],$linha['con'],intval($linha['qt']),intval($linha['preco']));
            $b.setCod($linha['cod']);
            return $b;
            mysqli_close($mysql);
        }
        public function listarEstoque($est){
            $mysqli = $this->criaConexao();
            $script = "Select * from medicamento where estoque < ?";
            $sql = $mysqli->prepare($script);
            $sql->bind_param('i',$est);
            $sql->execute();
            $linha = $mysql->fetchone($sql);
            $b = new Medicamento($linha['nome'],$linha['fab'],$linha['con'],intval($linha['qt']),intval($linha['preco']));
            $b.setCod($linha['cod']);
            return $b;
            mysqli_close($mysql);
        }
        public function listaPreco(){
            $mysqli = $this->criaConexao();
            $script = "Select * from medicamento order by preco";
            $sql = $mysqli->prepare($script);
            $sql->bind_param('i',$est);
            $sql->execute();
            $c = array();
            while($linha = $mysql->fetch($sql)){
            $b = new Medicamento($linha['nome'],$linha['fab'],$linha['con'],intval($linha['qt']),intval($linha['preco']));
            $b.setCod($linha['cod']);
            array_push($c,$b);
            }
            return $c;
            mysqli_close($mysql);
        }
        public function listaQt(){
            $mysqli = $this->criaConexao();
            $script = "Select * from medicamento order by quantidade";
            $sql = $mysqli->prepare($script);
            $sql->bind_param('i',$est);
            $sql->execute();
            $c = array();
            while($linha = $mysql->fetch($sql)){
            $b = new Medicamento($linha['nome'],$linha['fab'],$linha['con'],intval($linha['qt']),intval($linha['preco']));
            $b.setCod($linha['cod']);
            array_push($c,$b);
            }
            return $c;
            mysqli_close($mysql);
        }
        public function update($med){
            $mysqli = $this->criaConexao();
            $script = "update where medicamento set nome = ?, fabricante = ?, controlado = ?, quantidade = ?, preco = ? where cod = ?";
            $sql = $mysqli->prepare($script);
            $a = [$med->getNome(),$med->getFabricante(),$med->getControlado(),$med->getQuantidade(),$med->getPreco(),$med->getCod()];
            $sql->bind_param('sssidi', $a[0],$a[1],$a[2],$a[3],$a[4],$a[5]);
            $sql->execute();
            mysqli_close($mysql);
        }
    }
?>