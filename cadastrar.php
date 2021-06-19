<?php
include "data.php";
?>
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
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  
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
<br>
	<div class="row">
		<div class="col-md-12 boxf">
			<h3>Cadastrar Devedor</h3>
			<br>
			<?php 
			//declarando campos obrigatorios
			$erro="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nome"]) or empty($_POST['cpf']) or empty($_POST['valor']) or empty($_POST['diav']) or empty($_POST['mesv']) or empty($_POST['anov'])) {
            $erro = "Campo Obrigatorio";
            }
		  
			}
			?>
			<form method="post">
			<div class="form-row">
				<div class="form-group col-md-8">
					<input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o Nome ou Razão Social:">
					<span class="error"> <?php echo $erro;?></span>
				</div>
				<div class="form-group col-md-4">
					<input type="text" id="cpf" name="cpf" class="form-control" placeholder="Digite o CPF ou CNPJ:">
					<span class="error"> <?php echo $erro;?></span>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-7">
					<input type="text" id="endereco" name="endereco" class="form-control" placeholder="Digite o Lagradouro com o numero">
				</div>
				<div class="form-group col-md-2">
					<input type="text" id="bairro" class="form-control" name="bairro" placeholder="Bairro:">
				</div>
				<div class="form-group col-md-1">
					    <select name="uf" id="uf" class="form-control">
	<option value="">UF</option>
	<option value="AC">AC</option>
	<option value="AL">AL</option>
	<option value="AP">AP</option>
	<option value="AM">AM</option>
	<option value="BA">BA</option>
	<option value="CE">CE</option>
	<option value="DF">DF</option>
	<option value="ES">ES</option>
	<option value="GO">GO</option>
	<option value="MA">MA</option>
	<option value="MT">MT</option>
	<option value="MS">MS</option>
	<option value="MG">MG</option>
	<option value="PA">PA</option>
	<option value="PB">PB</option>
	<option value="PR">PR</option>
	<option value="PE">PE</option>
	<option value="PI">PI</option>
	<option value="RJ">RJ</option>
	<option value="RN">RN</option>
	<option value="RS">RS</option>
	<option value="RO">RO</option>
	<option value="RR">RR</option>
	<option value="SC">SC</option>
	<option value="SP">SP</option>
	<option value="SE">SE</option>
	<option value="TO">TO</option>
    </select>
				</div>
				<div class="form-group col-md-2">
					<input type="text" name="cep" id="cep" class="form-control" placeholder="CEP:">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-9">
					<textarea name="descricao" id="descricao" class="form-control" placeholder="Descrição:"></textarea>
				</div>
				<div class="form-group col-md-3">
				<span class="error"> <?php echo $erro;?></span>
					<input type="text" name="valor" id="valor" class="form-control" placeholder="Valor: R$"
					
				</div>
			</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6" style="text-align: left"><h5>Data Nascimento</h5></div>
					<div class="form-group col-md-6"><h5>Data de Venncimento</h5></div>
				</div>
			<div class="form-row">
			<div class="form-group col-md-1">
				<input type="text" name="dian" id="dian" placeholder="Dia:" class="form-control">
				</div>
				<div class="form-group col-md-2">
				<select name="mesn" id="mesn" class="form-control">
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
				<input type="text" name="anon" id="anon" placeholder="Ano:" class="form-control">
				</div>
				<div class="form-group col-md-2"></div>
				<div class="form-group col-md-1">
				<input type="text" name="diav" id="diav" placeholder="Dia:" class="form-control">
				<span class="error"> <?php echo $erro;?></span>
				</div>
				<div class="form-group col-md-2">
				<select name="mesv" id="mesv" class="form-control">
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
				<span class="error"> <?php echo $erro;?></span>
				</div>
				<div class="form-group col-md-2">
				<input type="text" name="anov" id="anov" placeholder="Ano:" class="form-control">
				<span class="error"> <?php echo $erro;?></span>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
					<input type="submit" value="Cadastrar" class="btn btn-primary">
				</div>
			</div>
<script>
$('#cpf').mask('000.000.000-00');
$('#cnpj').mask('00.000.000/0000-00');
$('#cep').mask('00000-000');
$('#valor').mask('000000,00');

</script>
				
			</form>
			
			<?php
			
			if(isset($_POST['cpf']) and !empty($_POST['cpf']) and !empty($_POST['nome']) and !empty($_POST['valor']) and !empty($_POST['diav']) and !empty($_POST['mesv']) and !empty($_POST['anov'])){
				//incluindo conexão
				include "conexao.php";
				//chamando class devedor
				require_once "class/devedor.php";
				
				//criando objeto
				$devedor = new Devedor();
				
				try{
                $pdo = new PDO($host,$login,$senha);
					
				$sql="INSERT INTO `devedor`(`nome`, `cpf`, `endereco`, `bairro`, `uf`, `cep`, `descricao`, `valor`, `dian`, `mesn`, `anon`, `diav`, `mesv`, `anov`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
					//chamando método set para receber informações
				$devedor->setNome($_POST['nome']);
				$devedor->setCpf($_POST['cpf']);
				$devedor->setEndereco($_POST['endereco']);
				$devedor->setBairro($_POST['bairro']);
				$devedor->setUf($_POST['uf']);
				$devedor->setCep($_POST['cep']);
				$devedor->setDescricao($_POST['descricao']);
				$devedor->setValor($_POST['valor']);
				$devedor->setDian($_POST['dian']);
				$devedor->setMesn($_POST['mesn']);
				$devedor->setAnon($_POST['anon']);
				$devedor->setDiav($_POST['diav']);
				$devedor->setMesv($_POST['mesv']);
				$devedor->setAnov($_POST['anov']);
					//retornando informações pelo método get
				$info=array(
				$devedor->getNome(),
				$devedor->getCpf(),
				$devedor->getEndereco(),
				$devedor->getBairro(),
				$devedor->getUf(),
				$devedor->getCep(),
				$devedor->getDescricao(),
				floatval($devedor->getValor()),
				intval($devedor->getDian()),
				$devedor->getMesn(),
				intval($devedor->getAnon()),
				intval($devedor->getDiav()),
				$devedor->getMesv(),
				intval($devedor->getAnov())
				);
					//contador de informações
					$x=1;
					//contador da matriz
					$y=0;
					
				$stmt = $pdo->prepare($sql);
				for($y=0;$y<count($info);$y++){
	            $stmt->bindParam($x, $info[$y]);
				$x++;
			    }
 
                if($stmt->execute()){
					?>
		        <h2 style="color: green"><?php echo 'Cadastrado com sucesso'; ?></h2>
            <?php
	            }else{ ?>
			    <h2 style="color: red"><?php echo 'Errou ao Cadastrar'; ?></h2>
	            <?php }
	            }catch(PDOException $ex){
	            echo 'Erro: '.$ex->getMessage();
             }
			}
			?>
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