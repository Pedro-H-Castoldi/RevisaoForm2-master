<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body >
    <div id="wrap">
        <form method="post" action='pedido\mostrar.php' id="delivery-form" >
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Monte sua refeição</legend>
                <div class='field_container'>
                <label >Acompanhamento</label>
                <label class='radiolabel'><input type="radio" name="ingre"  value="Arroz"  />Arroz branco</label><br/>
                <label class='radiolabel'><input type="radio" name="ingre"  value="Macarrao"  />Macarrão alho-e-óleo</label><br/>
                <label class='radiolabel'><input type="radio" name="ingre" value="Farofa"  />Farofa de calabreza</label><br/>
                <label class='radiolabel'><input type="radio" name="ingre" value="Salada"  />Salada de folhas</label><br/>
                </div>
                
                <div class='field_container'>
                    <label for="flavor">Prato principal:</label >
                    <select id="flavor" name='prato_principal' >
                    <option value="">Escolha uma opção</option>
                    <option value="Bife à parmegiana" >Bife à parmegiana</option>
                    <option value="Frango à parmegiana">Frango à parmegiana</option>
                    <option value="Lasanha de brócolis">Lasanha de brócolis</option>
                    <option value="Peixe frito">Peixe frito</option>
                   </select>
                </div>
                <div class='field_container'>
                    <label >Adicionais:</label> 
                    <label><input type="checkbox" name="adc[]" value="Batata-frita" />Batata-frita</label>
                    <label><input type="checkbox" name="adc[]" value="Batata-palha" />Batata-palha</label>
                    <label><input type="checkbox" name="adc[]" value="Oregano" />Orégano</label>
                    <label><input type="checkbox" name="adc[]" value="Vinagrete" />Vinagrete</label>
                    <label><input type="checkbox" name="adc[]" value="Tomate" />Tomate</label>
                    <label><input type="checkbox" name="adc[]" value="Cebola" />Cebola</label>
               </div>
               <div class='field_container'>
                   <label class="inlinelabel"><input type="checkbox" name="confirma" id="agree" /> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
               </div>
              </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                <legend>Informações do cliente</legend>
                <label for='name'>Nome completo</label>
                <input type="text" name="nome" id="name"/>
                <br/>
                <label for='address'>Endereço de entrega</label>
                <input type="text" name="endereco" id="address" />
                <br/>
                <label for='phonenumber'>Telefone</label>
                <input type="text" name="tel" id="phonenumber"/>
                <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' name="enviado" value='Realizar pedido'/>
        </div>  
       </form>
	</div>

</body>
</html>