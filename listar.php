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
<section class="home2">
<div class="container">
<br>

	<div class="row">
		<div class="col-md-12 boxf">
		 <h3>Lista de Devedores</h3>
		 <br>
	    <div class="row">
	    
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
		
		
        <div class="col-md-6" style="text-align: left">
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
        }
		?>
     </div>
		</div>
	</div>
	<br>
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