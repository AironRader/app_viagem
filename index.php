<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Viagem</title>

     <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>


<div class="col-md-6"> 
             <h2> Calculadora de Viagem</h2>
            
            <div class="card-body font-weight-bold">
            <form action="Calcular.php" method="post">
              <div class="form-group mb-2">
                <label for="nome"><h4><B>Cidade Origem</B></h4></label>
                <input name="cidade_origem" type="text" class="form-control"  placeholder="Informe a Cidade de Origem" required>
              </div>
              <div class="form-group mb-2">
                <label for="email"><h4><B>Cidade de Destino</B></h4></label>
                <input name="cidade_destino" type="text" class="form-control"  placeholder="Informe a Cidade de destino" required>
              </div>

              <div class="form-group mb-2">
                <label for="email"><h4><B>Distancia Total em Km</B></h4></label>
                <input name="distancia_km" type="text" class="form-control"  placeholder="Informe a Distancia em Km" required>
              </div>
              <div class="form-group mb-2">
                <label for="email"><h4><B>Modelo do Veiculo</B></h4></label>
                <input name="modelo" type="text" class="form-control"  placeholder="Informe o Modelo do Veículo" required>
              </div>

              <div class="form-group mb-2">
                <label for="email"><h4><B>Tipo Combustivel</B></h4></label>
                <input name="tipo" type="text" class="form-control"  placeholder="Informe a Distancia em Km" required>
              </div>
              <div class="form-group mb-2">
                <label for="email"><h4><B>Média em Km</B></h4></label>
                <input name="gasto" type="text" class="form-control"  placeholder="Informe o Gasto em Km" required>
              </div>

              <div class="form-group mb-2">
                <label for="email"><h4><B>Preço Combustivel</B></h4></label>
                <input name="preco" type="text" class="form-control"  placeholder="Informe o Preço do Combustivel" required>
              </div>
              
              
               <div class=" d-grid grap-2 ">
                <button type="submit" name="Calcular" class=" f btn-primary btn-lg mt-4 " >Calcular</button>
              </div>
            </form>
          </div>
          <div>

          

  </div>
</body>
</html>