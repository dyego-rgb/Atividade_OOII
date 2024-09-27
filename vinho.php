<?php
class Vinho {
   private $nome;
   private $tipo;
   private $preco;
   private $safra;
   
   public function __construct($nome, $tipo, $preco, $safra) {
       $this->nome = $nome;
       $this->tipo = $tipo;
       $this->preco = $preco;
       $this->safra = $safra;
   }
 
   public function getNome() {
       return $this->nome;
   }
   public function getTipo() {
       return $this->tipo;
   }
   public function getPreco() {
       return $this->preco;
   }
   public function getSafra() {
       return $this->safra;
   }
 
   public function mostrarVinho() {
       return "Nome: $this->nome, Tipo: $this->tipo, Preço: $this->preco, Safra: $this->safra";
   }
 
   public function verificarPreco() {
       if ($this->preco < 25) {
           return true;
       } else {
           return false;
       }
   }
}
?>