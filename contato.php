<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- CSS CUSTOM -->
  <link rel="stylesheet" href="css/estilo.css">

  <!-- Icones -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Pingo de Amor</title>
</head>

<body>
  <?php include "menu.php";
      ?>
<<<<<<< HEAD
        <br>
        <h1 class="text-center">Entre em contato</h1><br>
		<div class="container">
        <div class="form-group">
			<label>Nome</label>
			<input type="text" name="nome" class="form-control" required> 
        </div>
		<div class="row">	 
		<div class="form-group col-6">
			  <label>E-mail</label>
			 <input type="email" name="email" class="form-control" required>
        </div>
         <div class="form-group col-6">
           <label>Fone</label>
            <input type="text" name="fone" class="form-control" required>
         </div>
		 </div>
		<div class="form-group">
			<textarea class="form-control" id="descricao" name="descricao" rows="5" cols="20" maxlength="500" placeholder="Envie uma mensagem!"></textarea>
			</div>
		
			<div class="form-group">
         <button type="submit" class="btn btn-primary mr-auto">Enviar</button>
		 </div>
</div>

        <?php include "footer.php";
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

=======
  <br>
  <h1>Entre em contato</h1><br>
  <input type="hidden" name="acao" value="cadastrar">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" name="nome_funcionario" class="form-control">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="email" name="email_funcionario" class="form-control">
  </div>
  <div class="form-group">
    <label>Fone</label>
    <input type="text" name="fone_funcionario" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>


  <?php include "footer.php";
      ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>
>>>>>>> contato
