<?php
include 'topo.php';
include 'conexao.php';


$stmt = $banco->prepare("SELECT * from usuario order by id");
$stmt->execute();
?>

<form action="cadastro.php" >
	<table class="table table-hover">
		<caption class="text-center">Lista de Clientes</caption>
		<tr align="center">
			<td>Nome</td>
			<td>Endereço</td>
			<td>Telefone</td>
			<td>Opções</td>
		</tr>
		<?php while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
		<tr align="center">
			<td><?php echo $dados["nome"]?></td>
			<td><?php echo $dados["endereco"]?></td>
			<td><?php echo $dados["telefone"]?></td>
			<td>
				<a href='remover.php?id=<?php echo $dados['id']?>'>Remover</a> &nbsp;
				<a href='cadastro.php?id=<?php echo $dados['id']?>'>Editar</a>
			</td>
		</tr>
		<?php }?>
	</table>
	<br><br>
	<input type="submit" value="Cadastrar Novo Registro">
</form>

<?php include 'rodape.php';?>

