<?php
//incluir dados de conexao
include "conexao.php";

try{
$pdo = new PDO($host,$login,$senha);
	$sql ='DELETE FROM `devedor` WHERE id_devedor=:id';
	$id_devedor= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':id', $id_devedor);
	if($stmt->execute()){
		header("location: listar.php");
	}else{
		echo 'Errou porque? kk';
	}
	}catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage();
}
?>