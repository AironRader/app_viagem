<?php


 $cidade_origem = $_POST['cidade_origem'];
 $cidade_destino = $_POST['cidade_destino'];
 $distancia_km = floatval($_POST['distancia_km']);
 $modelo = $_POST['modelo'];
 $tipo =  $_POST['tipo'];
 $gasto_km = floatval($_POST['gasto']);
 $preco = floatval($_POST['preco']);

 $total_litro = $distancia_km / $gasto_km;
 $total_gasto =  $total_litro * $preco;



 echo '<h1> Resultado da pesquisa </h1>';

echo '<b>Cidade de Origem:</b> ' . $cidade_origem;
echo '</br>';
echo '<b>Cidade de Destino:</b> ' . $cidade_destino;
echo '</br>';
echo '<b>Distancia em Km:</b> ' .  $distancia_km;
echo '</br>';
echo '<b>Modelo do Carro</b> ' . $modelo;
echo '</br>';
echo '<b>Tipo do Combustivel:</b> ' . $tipo;
echo '</br>';
echo '<b>Gasto por Km:</b> ' . $gasto_km;
echo '</br>';
echo '<b>Preço do Combustível:</b> ' . $preco;
echo '</br>';


echo '<br> <br> O valor gasto de  para realizar a viagem é: R$'. number_format($total_gasto, 2)
.', e o total de litros gasto em combustível para realizar a viagem é: ' . number_format($total_litro,2).'L';

?>