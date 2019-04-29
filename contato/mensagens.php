<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="../css/estilo.css">
    
    <!-- Icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Caixas da Tati</title>
  </head>
  <body>
      <?php include "../menu.php";
            include "../conexao.php";
      ?>

        <?php
        $sql = "SELECT m.*, p.* FROM mensagem AS m
        INNER JOIN produto AS p
        ON m.Id_Produto = p.Id_Produto";

        $res = $conexao->query($sql);
        $qtd = $res->num_rows;
        ?>

        <div class="container-fluid table-responsive">
        <table class="table table-striped table-hover" style="background-color: whitesmoke;">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Produto</th>
                <th scope="col" class="w-50">Mensagem</th>
                <th scope="col" class="w-10">Excluir</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row = $res->fetch_assoc()){ 
                ?>
            <tr>
                <th scope="row"><?php echo $row['Id_Mensagem']; ?></th>
                <td><?php echo $row['Nome_Cliente']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Telefone']; ?></td>
                <td><?php echo ($row['Id_Produto'] != null) ? "<a class=\"modalDetalhes\" href=\"javascript:void(0);\" data-href=\"conteudoProduto.php?Id_Produto=".$row['Id_Produto']."\">". $row['Nome_Produto'] ."<i class=\"fas fa-info-circle fa-md\"></i></a>" : "Contato"; ?></td>
                <td><?php echo $row['Mensagem']; ?></td>
                <td><?php echo '<button onclick="if(confirm(\'tem certeza que deseja excluir a Mensagem '.$row['Id_Mensagem'].'?\')){location.href=\'excluirMensagem.php?Id_Mensagem='.$row['Id_Mensagem'].'\';}else{false;}"  class=\'btn btn-danger\'><i class="fas fa-trash-alt"></i></button>'; ?></td>

            </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
        <div class="modal fade" id="modal_detalhes" tabindex="-1" role="dialog" aria-labelledby="modalInformacoesTitulo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalInformacoesTitulo">Detalhes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <?php include "../footer.php";
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $('.modalDetalhes').on('click',function(){
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL,function(){
                $('#modal_detalhes').modal({show:true});
            });
        });
    });
</script>
  </body>
</html>