##Desafio 1 - Criar um form para entrar com um número, e depois ao clicar no botão adicionar + 1 ao número

<form action="desafio1.php" method="get">
	
	
	<input type="text" name="num" value="<?php  


		if(!isset($_GET['num'])){
			$_GET['num'] = 1;
		}

		echo ++$_GET['num'];

	?>">

	<input type="submit" name="mais-um" value="Mais um">

</form>
