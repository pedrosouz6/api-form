<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <header>
            <h1>Formulário(ViaCep)</h1>
        </header>
        
        <form action="validacao.php" method="POST">
           <div class="container_inputs">
               <div>
                   <label for="cep">CEP</label>
                   <input type="number" placeholder="Ex: 01001000" name="cep" id="cep">
               </div>
                  
               <div id="div-enviar">
                   <input type="submit" value="Enviar" name="enviar">
               </div>
           </div>

           <?php
            session_start();
            session_destroy();
            if(isset($_SESSION["dados"])){
                $dados = $_SESSION["dados"];
            ?>
                <div class="container_info">
                    <h3>Informações do CEP</h3>
                    <p><strong>Estado: </strong><?php echo $dados["uf"]?></p>
                    <p><strong>Cidade: </strong><?php echo $dados["localidade"]?></p>
                    <p><strong>Bairro: </strong><?php echo $dados["bairro"]?></p>
                    <p><strong>Endereço: </strong><?php echo $dados["logradouro"]?></p>
                </div>
           <?php };?>
        </form>
    </main>
</body>
</html>