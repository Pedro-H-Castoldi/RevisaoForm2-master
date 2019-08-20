<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nome = $_POST["nome"];
		$endereco = $_POST["endereco"];
		$tel = $_POST["tel"];
	}
	if($_POST["ingre"] == "Arroz"){
		$ingre = "Arroz";
	}
	else if($_POST["ingre"] == "Macarrao"){
		$ingre = "Macarrao";
	}
	else if($_POST["ingre"] == "Farofa"){
		$ingre = "Farofa";
	}
	else{
		$ingre = "Salada";
	}



	echo "NOME: {$nome}<br>";
	echo "ENDEREÇO: {$endereco}<br>";
	echo "TELEFONE: {$tel}<br>";

	echo "ACOPANHAMENTO: {$ingre}<br>";

	echo "PRATO PRINCIPAL: ". $_POST["prato_principal"]. "<br>";

	echo "ADICIONAIS: ". $_POST["adc[]"]. "<br>";
 ?>