<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema CRUD Devedor</title>
<!-- Desenvolvido por Zilvan Molina de Oliveira Junior
Data: 19/06/2021 -->
<!-- link do bootstrao -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- fim bootstrap -->

<!-- link CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- fim CSS -->

<!-- link Javascript -->
<script src="js/jquery.js"></script>
<!-- fim Javascript -->
</head>

<body>
<!-- declarando navbar para navegação do sistema -->
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">SCDD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastrar.php">Cadastrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listar.php">Listar</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="consultar.php">Consultar</a>
      </li>
      </ul>
  </div>
</nav>
</header>
<!-- fim do navbar -->
<!-- inicio da estrutura do home -->
<section class="home">
<div class="container">
	<div class="row">
		<div class="col-md-12 box1">
		<br>
			<h4>Consultar Devedores</h4>
			<br>
			<form method="post">
				<div class="form-row">
					<div class="form-group col-md-10">
						<input type="text" id="pesq" name="pesq" class="form-control" placeholder="Pesquisar" list="dados">
						<datalist id="dados">
							<?php 
		//incluindo conexão
		include "conexao.php";
		try{
        $pdo = new PDO($host,$login,$senha);
		$sql ="SELECT * FROM devedor";
		$stmt = $pdo->prepare($sql);
	    $stmt->execute();
	    $result = $stmt->fetchAll();
	    foreach($result as $value){ ?>
							<option value="<?php echo $value['id_devedor']; ?>"><?php echo $value['nome']; ?></option>
							<option value="<?php echo $value['id_devedor']; ?>"><?php echo $value['cpf']; ?></option>
							<option value="<?php echo $value['id_devedor']; ?>"><?php echo $value['bairro']; ?></option>
							<option value="<?php echo $value['id_devedor']; ?>"><?php echo $value['uf']; ?></option>
							<?php }
	    }catch(PDOException $ex){
	    echo 'Erro: '.$ex->getMessage();
        }
		?>
						</datalist>
					</div>
					<div class="form-group col-md-2">
						<input type="submit" value="Pesquisar" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
		<br>
		<div class="col-md-12 box1">
			  <div class="row">
	    
     <?php 
		//incluindo conexão
				  if(isset($_POST['pesq'])){
		include "conexao.php";
		try{
        $pdo = new PDO($host,$login,$senha);
		$pesq=$_POST['pesq'];
	    $sql ="SELECT * FROM devedor WHERE id_devedor=:id";
	    $stmt = $pdo->prepare($sql);
	   $stmt->bindParam(':id', $pesq);
	    $stmt->execute();
	    $result = $stmt->fetchAll();
	    foreach($result as $value){ ?>
		
		
        <div class="col-md-6" style="text-align: left; background: white;">
        <b>Nome:</b> <?php echo $value['nome']; ?><br>
        <b>CPF ou CNPJ:</b><?php echo $value['cpf']; ?><br>
        <b>Endereço:</b> <?php echo $value['endereco']; ?><br>
        <b>Bairro:</b> <?php echo $value['bairro']; ?><br>
        <b>Uf:</b> <?php echo $value['uf']; ?><br>
        <b>Cep:</b> <?php echo $value['cep']; ?><br>
        <b>Descrição:</b> <?php echo $value['descricao']; ?><br>
        <b>Valor:</b> <?php echo $value['valor']; ?><br>
        <b>Data Nacimento: </b><?php echo $value['dian']."/".$value['mesn']."/".$value['anon']; ?><br>
        <b>Data Vencimento: </b><?php echo $value['diav']."/".$value['mesv']."/".$value['anov']; ?><br>
        <b>Opção:</b>   <?php echo "<a onclick='apagardevedor();' href='apagardevedor.php?id=" . $value['id_devedor'] . "'><button class='btn btn-danger'>Excluir</button></a><a href='editardevedor.php?id=".$value['id_devedor']."'><button class='btn btn-primary'>Editar Dados</button></a>" ?><br>
        <br><br>
        </div>
	    <?php }
	    }catch(PDOException $ex){
	    echo 'Erro: '.$ex->getMessage();
        }}
		?>
     </div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 box1">
		<br>
			<h4>Consultar Total de Dividas do Mês</h4>
			<br>
			<form method="post">
				<div class="form-row">
					<div class="form-group col-md-8">
					<select name="pesq2" id="pesq2" class="form-control">
				   <option value="">Mês</option>
					<option value="Janeiro">Janeiro</option>
					<option value="Fevereiro">Fevereiro</option>
					<option value="Marco">Março</option>
					<option value="Abril">Abril</option>
					<option value="Maio">Maio</option>
					<option value="Junho">Junho</option>
					<option value="Julho">Julho</option>
					<option value="Agosto">Agosto</option>
					<option value="Setembro">Setembro</option>
					<option value="Outubro">Outubro</option>
					<option value="Novembro">Novembro</option>
					<option value="Dezembro">Dezembro</option>
				</select>
						
					</div>
					<div class="form-group col-md-2">
						<input type="text" name="anop" id="anop" placeholder="Ano:" class="form-control">
					</div>
					<div class="form-group col-md-2">
						<input type="submit" value="Pesquisar" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
		<br>
		<div class="col-md-12 box1">
			  <div class="row">
	    
     <?php 
		//incluindo conexão
				  $count=0;
		if(isset($_POST['pesq2'])){
		include "conexao.php";
	    require_once "class/devedor.php";
			//criando objeto
			$devedor=new Devedor();
			
		try{
        $pdo = new PDO($host,$login,$senha);
		$devedor->setMesv($_POST['pesq2']);
		$devedor->setAnov($_POST['anop']);
		$info=array(
		$devedor->getMesv(),
		intval($devedor->getAnov())
		);
	    $sql ="SELECT * FROM devedor WHERE mesv=:mv and anov=:av";
	    $stmt = $pdo->prepare($sql);
	    $stmt->bindParam(':mv', $info[0]);
		$stmt->bindParam(':av', $info[1]);
	    $stmt->execute();
	    $result = $stmt->fetchAll();
	    foreach($result as $value){ ?>
		
		
        <div class="col-md-6" style="text-align: left; background: white;">
        <b>Nome:</b> <?php echo $value['nome']; ?><br>
        <b>CPF ou CNPJ:</b><?php echo $value['cpf']; ?><br>
        <b>Endereço:</b> <?php echo $value['endereco']; ?><br>
        <b>Bairro:</b> <?php echo $value['bairro']; ?><br>
        <b>Uf:</b> <?php echo $value['uf']; ?><br>
        <b>Cep:</b> <?php echo $value['cep']; ?><br>
        <b>Descrição:</b> <?php echo $value['descricao']; ?><br>
        <b>Valor:</b> <?php echo $value['valor']; $count+=$value['valor']; ?><br>
        <b>Data Nacimento: </b><?php echo $value['dian']."/".$value['mesn']."/".$value['anon']; ?><br>
        <b>Data Vencimento: </b><?php echo $value['diav']."/".$value['mesv']."/".$value['anov']; ?><br>
        <br><br>
        </div>
	    <?php }
	    }catch(PDOException $ex){
	    echo 'Erro: '.$ex->getMessage();
        }}
		?>
    <h3>Total do Valor de Dividas: <b style="color: red;"><?php echo "R$".$count.",00"; ?></b></h3>
     </div>
		</div>
	</div>
	
</div>
</section>
<!-- fim da estrutura do home -->
<!-- inicio rodapé -->
<footer>
	<section class="rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="tt"><b>Desenvolvido por:</b>Zilvan Molina JR</h4>
					<h5>Data: 19/06/2021</h5>
				</div>
			</div>
		</div>
	</section>
</footer>
<!-- fim do rodapé -->
</body>
</html>