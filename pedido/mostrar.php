<?php

// Importar funcoes e variaveis
require_once ( "../validar/variaveis.php" );
require_once ( "../validar/funcoes.php" );

// Validar se o usuário chegou a página via formulário
// e limpar post
// formEnviado($_POST);
formEnviado($_POST);
//
$adc = $_POST["adc"];
validarAdicionais($adc);

gerarMensagensErro($dados);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../css/mostrar.css">
</head>
<body>
	<?php
	if (@$mensagem_erro["prato_principal_vazio"] != "") {
            echo "<br><b>".$mensagem_erro["prato_principal_vazio"]."</b>";
        } else {
        	?>
	<?php 
		if($dados["ingre"] == "Arroz"){
		$ingre = "Arroz";
		}
		else if($dados["ingre"] == "Macarrao"){
			$ingre = "Macarrao";
		}
		else if($dados["ingre"] == "Farofa"){
			$ingre = "Farofa";
		}
		else{
			$ingre = "Salada";
		}
?>
<div class= "pai"
	<div class="dados">
	<h1>DADOS</h1>
	<span><?php echo "Nome: ". $dados['nome'] ."<br><br>";?></span>
	<span><?php echo "Endereço: ". $dados['endereco'] ."<br><br>";?></span>
	<span><?php echo "Telefone: ". $dados['tel'] ."<br><br>";?></span>


<div class="pedido">
	<h1>PEDIDO</h1>

	<span>Confirmação de veracidade das informações: </span> 
            <?php echo isset($dados['confirma']) &&  $dados['confirma'] == true ? "Aceito": "Negado"; ?><br><br>

	<span><?php echo "Acopanhamento: ". $dados['ingre'] ."<br><br>";?></span>

	<span><?php echo "PRATO PRINCIPAL: ". $dados["prato_principal"]. "<br><br>"; ?></span>

	<sapn clas="adc"><?php echo "Adicionais: " ?>
	<?php 
		foreach ($adc as $ind => $valor) {
			 echo "$valor, ";
   	} ?></sapn>
   <?php } ?>
  
</div>
</div>
</body>
</html>