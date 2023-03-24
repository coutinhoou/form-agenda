<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>


<body style="background-color: darkgrey;">
   
    <?php    
        echo "coutinho teste";        
    ?>    

    <section style="margin-left: 40%;margin-right: 40%;margin-top: 10%;margin-bottom: 90%;">      
        <h1 style="text-align: center;">Entrada</h1><br>        
    <form action= "pagina1.php" method= "post" >      
                
        <div class="form-group">          
          <label for="exampleInputPassword1"style="font-size:25PX">Nome</label>          
          <input type="text" class="form-control" name= "nome" placeholder="Nome">          
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1"style="font-size:25PX">Sobrenome</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="sobrenome" placeholder="Sobrenome">
          </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1"style="font-size:25PX">telefone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="telefone"  placeholder="Seu Telefone">
            <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
          </div>
          <section style="text-align: center;">
        <button type="submit" class="btn btn-primary"style="height:40px ;width: 120px;"><p>Enviar</p></button>
    </section>
      </form>
      </section>
<?php



   
?>
 <a href= "pagina1.php">Vizualize os registros </a>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>