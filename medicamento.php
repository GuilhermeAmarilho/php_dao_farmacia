<?php 
    class Medicamento{
        private $cod;
        private $nome;
        private $fabricante;
        private $controlado;
        private $quantidade;
        private $preco;
        public function Medicamento($nome, $fabricante, $controlado,$quantidade,$preco){
            $this->cod = "";
            $this->nome = $nome;
            $this->fabricante = $fabricante;
            $this->controlado = strtoupper($controlado);
            $this->quantidade = $quantidade;
            $this->preco = $preco;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getFabricante(){
            return $this->fabricante;
        }
        public function setFabricante($fabricante){
            $this->fabricante = $fabricante;
        }
        public function getControlado(){
            return $this->controlado;
        }
        public function setControlado($nome){
            $this->controlado = $controlado;
        }
        public function getQuantidade(){
            return $this->quantidade;
        }
        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }
        public function getCod(){
            return $this->cod;
        }
        public function setCod($cod){
            $this->cod = $cod;
        }
    }
?>