<?php
include 'topo.php';
include 'conexao.php';


$id		= '';
$nome	= '';
$endereco = '';
$telefone = '';
$acao	= 'gravar.php';

if(isset($_GET['id'])){
	
	$id = $_GET['id'];
	
	$stmt = $banco->prepare("SELECT * from usuario WHERE id = ?");
	$stmt->bindValue(1, $id);
	$stmt->execute();
	
	$dados = $stmt->fetch(PDO::FETCH_ASSOC);
	
	$nome	= $dados["nome"];
	$endereco = $dados["endereco"];
	$telefone = $dados["telefone"];
	
	$acao 	= "editar.php?id=".$id;
	
}
?>

<div class="container-fluid"><h2 align="center">Informe os dados</h2>

 <form method="post" action="<?php echo $acao?>" enctype="multipart/form-data">
 	<div class="row">
 		<div class="col-md-8">
 			<label>Nome</label>
 			<input type="text" class="form-control" name="nome" value="<?php echo $nome?>"/>
 		</div> 	
 	</div>
 	<div class="row">
 		<div class="col-md-8">
 			<label>Endereço</label>
 			<input type="text" class="form-control" name="endereco" value="<?php echo $endereco?>"/>
 		</div>
 		<div class="col-md-2">
 			<label>Telefone</label>
 			<input type="text" class="form-control" name="telefone" value="<?php echo $telefone?>"/>
 		</div> 	
 	</div>
 	<br><br><br>
 	<div class="row">
 		<div class="col-md-12">
 			<button class="btn btn-primary" type="submit">Salvar</button>
 			<a href='index.php' class="btn btn-primary">Cancelar</a>
 		</div>
 	</div>
	
	<input type="hidden" name='id' value='<?php echo $id?>'> 
 </form>
</div>

<?php include 'rodape.php';?>

