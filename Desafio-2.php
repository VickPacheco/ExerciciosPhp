##Desafio 2 - Calcular os km por litro que a moto faz.

<form action="" method="post">

	<input type="text" name="abastec1" >Km</br></br>

	<input type="text" name="abastec2">Km</br></br>

	<input type="text" name="litros">Litros	

	</br></br><input type="submit" name="calcular" value="Calcular">

</form>


<?php
		if(isset($_POST['abastec2']) && isset($_POST['abastec1']) && isset($_POST['litros'])){
			$result = ($_POST['abastec2'] - $_POST['abastec1']) / $_POST['litros'];

			echo "O consumo da moto corresponde a: ". $result . "Km por litro";
		}
		

	
?>
