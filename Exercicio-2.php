<pre>##Exercício 2 --> Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e
tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.</pre>

<form action="" method="post">	

	Nome <input type="text" name="nome"><br /><br />

	<input type="radio" name="opcao" value="feminino" id="genero_f">Feminino
	<input type="radio" name="opcao" value="masculino">Masculino<br /><br />

	Idade <input type="text" name="idade">

	<br /><br />
	<input type="submit" name="aceita" value="ACEITA">

</form>

<?php

	if(isset($_POST['opcao']) && isset($_POST['idade'])){

		if($_POST['idade'] < 25 && $genero_f = $_POST['opcao']){
			
			echo "Seu nome: " . $_POST['nome'] . "</br>" . "ACEITA";

		}else{
			echo "NÃO ACEITA.";
		}

	}

?>
