<?php
class Devedor{
//declarando variaveis
public $nome, $endereco, $bairro ,$uf ,$cep, $descricao;
private $cpf, $dia_n, $mes_n, $ano_n, $valor, $dia_v, $mes_v, $ano_v, $updated;

//declarando construtor
function Devedor(){
	$this->nome;
	$this->cpf;
	$this->bairro;
	$this->uf;
	$this->cep;
	$this->endereco;
	$this->descricao;
	$this->valor;
	$this->dia_n;
	$this->mes_n;
	$this->ano_n;
	$this->dia_v;
	$this->mes_v;
	$this->ano_v;
	$this->updated;
	
}
// declarando métodos get and set nome
function setNome($nome){
	$this->nome=$nome;
}
function getNome(){
	return $this->nome;
}
// fim get e set nome
// declarando métodos get and set endereço
function setEndereco($endereco){
	$this->endereco=$endereco;
}
function getEndereco(){
	return $this->endereco;
}
// fim get e set endereço
// declarando métodos get and set descrição
function setDescricao($descricao){
	$this->descricao=$descricao;
}
function getDescricao(){
	return $this->descricao;
}
//fim get e set descricao
//declarando métodos get e set  CPF
function setCpf($cpf){
	$this->cpf=$cpf;
}
function getCpf(){
	return $this->cpf;
}
//fim do get e set
//declarando métodos get e set data nascimento
// foi feito uma mudanção do formato da data para modelo formal para otimizar buscas
function setDian($dia_n){
	$this->dia_n=$dia_n;
}
function getDian(){
	return $this->dia_n;
}
function setMesn($mes_n){
	$this->mes_n=$mes_n;
}
function getMesn(){
	return $this->mes_n;
}
function setAnon($ano_n){
	$this->ano_n=$ano_n;
}
function getAnon(){
	return $this->ano_n;
}
//fim do get e set data de nascimento
//declarando métodos get and set valor
function setValor($valor){
	$this->valor=$valor;
}
function getValor(){
	return $this->valor;
}
//fim do get e set valor
//declarando métodos get and set data de vencimento
// foi feito uma mudanção do formato da data para modelo formal para otimizar buscas
function setDiav($dia_v){
	$this->dia_v=$dia_v;
}
function getDiav(){
	return $this->dia_v;
}
function setMesv($mes_v){
	$this->mes_v=$mes_v;
}
function getMesv(){
	return $this->mes_v;
}
function setAnov($ano_v){
	$this->ano_v=$ano_v;
}
function getAnov(){
	return $this->ano_v;
}
function setUpdated($updated){
	$this->updated=$updated;
}
function getUpdated(){
	return $this->updated;
}
	
//declarando get and set bairro, uf e cep
function setBairro($bairro){
	$this->bairro=$bairro;
}
function getBairro(){
	return $this->bairro;
}

function setUf($uf){
	$this->uf=$uf;
}
function getUf(){
	return $this->uf;
}

function setCep($cep){
	$this->cep=$cep;
}
function getCep(){
	return $this->cep;
}
	}
?>