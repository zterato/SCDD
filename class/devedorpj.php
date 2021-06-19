<?php
//chamando arquivo com a classe devedor
require_once "devedor.php";
// declarando herança entre as classes
class Devedorpj extends Devedor{
	//declarando variaveis diferenciais
	public $rz;
	private $cnpj;
	
	//declarando construtor
	function __construct(){
	parent::Devedor();
		$this->cnpj;
		$this->rz;
	}
	//declarando métodos get and set CNPJ
	function setCnpj($cnpj){
		$this->cnpj=$cnpj;
	}
	function getCnpj(){
		return $this->cnpj;
	}
	// fim do cnpj
	//declarando métodos get and set razão social
	function setRz($rz){
		$this->rz=$rz;
	}
	function getRz(){
		return $this->rz;
	}
}
?>