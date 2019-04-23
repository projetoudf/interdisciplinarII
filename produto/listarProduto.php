<?php

$sql = "SELECT *
        FROM produto
        WHERE Id_Produto <= '".$_REQUEST['page']."'
        ORDER BY Id_Produto  DESC LIMIT 5;";
$count = 0;
$res = $conexao->query($sql);
while($row = $res->fetch_assoc()) :
    $sqlImg = mysqli_query($conexao,"SELECT Imagem FROM fotos WHERE Id_Produto = ".$row['Id_Produto']);

?>
<?php

if($count % 2 == 0): ?>
<div class="row my-2 sombra">

  <div class="col-sm-5 border">
    <div id="carousel<?php echo $row['Id_Produto']; ?>" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
            $contador = 0;
            while($img = $sqlImg->fetch_assoc()){
              echo '<div class="carousel-item ';
                if ($contador > 0):
                  echo " ";
                else:
                  echo "active";
                endif;
              echo '">';
              echo '<img class="d-block w-100" src="img/'. $img['Imagem'].'" alt="Imagem">';
              echo '</div>';
              $contador = 1;
            } ?>
      </div>
      <a class="carousel-control-prev" href="#carousel<?php echo $row['Id_Produto']; ?>" role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carousel<?php echo $row['Id_Produto']; ?>" role="button"
        data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>

  <div class="col-sm-7 border d-flex flex-column">
    <h2 class="display-4"><?php echo $row['Nome_Produto']; ?></h2>
    <p class="h4">Cor: <?php echo $row['Cor']; ?>, Altura: <?php echo $row['Altura']; ?>, Largura:
      <?php echo $row['Largura']; ?>, Comprimento: <?php echo $row['Comprimento']; ?></p>
    <p> <?php echo $row['Sobre']; ?></p>
    <span class="align-bottom mt-auto mb-1 ml-auto">
      <a href="javascript:void(0);" data-href="produto/enviarMensagem.php?Id_Produto='<?php echo $row['Id_Produto']?>'" class="btn btn-pink gosteiDeste"><i class="far fa-thumbs-up"></i> Gostei!</a>
      <?php if (isset($_SESSION['Email'])): ?>
      <a href="produto/editarProduto.php?Id_Produto=<?php echo $row['Id_Produto']?>" class="btn btn-warning"><i class="far fa-edit fa-md"></i> Editar</a>
      <button onclick="if(confirm('Tem certeza que deseja excluir o ANÚNCIO <?php echo $row['Nome_Produto'];?>')){location.href='produto/excluirProduto.php?Id_Produto=<?php echo $row['Id_Produto'];?>';}else{false;}"  class="btn btn-dark"><i class="fas fa-trash-alt"></i></button>
          <?php endif; ?>
    </span>
  </div>
</div>
          <?php else: ?>
  <div class="row my-2 sombra">

  <div class="col-sm-7 border d-flex flex-column">
    <h2 class="display-4"><?php echo $row['Nome_Produto']; ?></h2>
    <p class="h4">Cor: <?php echo $row['Cor']; ?>, Altura: <?php echo $row['Altura']; ?>, Largura:
      <?php echo $row['Largura']; ?>, Comprimento: <?php echo $row['Comprimento']; ?></p>
    <p> <?php echo $row['Sobre']; ?></p>
    <span class="align-bottom mt-auto mb-1 mr-auto">
      <a href="javascript:void(0);" data-href="produto/enviarMensagem.php?Id_Produto=<?php echo $row['Id_Produto']?>" class="btn btn-pink gosteiDeste"><i class="far fa-thumbs-up"></i> Gostei!</a>      <?php if (isset($_SESSION['Email'])): ?>
      <a href="produto/editarProduto.php?Id_Produto=<?php echo $row['Id_Produto']?>" class="btn btn-warning"><i class="far fa-edit fa-md"></i> Editar</a>
      <button onclick="if(confirm('Tem certeza que deseja excluir o ANÚNCIO <?php echo $row['Nome_Produto'];?>')){location.href='produto/excluirProduto.php?Id_Produto=<?php echo $row['Id_Produto'];?>';}else{false;}"  class="btn btn-dark"><i class="fas fa-trash-alt"></i></button>
      <?php endif; ?>
    </span>
  </div>

  <div class="col-sm-5 border">
    <div id="carousel<?php echo $row['Id_Produto']; ?>" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
            $contador = 0;
            while($img = $sqlImg->fetch_assoc()):
              echo '<div class="carousel-item ';
                if ($contador > 0):
                  echo " ";
                else:
                  echo "active";
                endif;
              echo '">';
              echo '<img class="d-block w-100" src="img/'. $img['Imagem'].'" alt="Imagem">';
              echo '</div>';
              $contador = 1;
                endwhile; ?>
      </div>
      <a class="carousel-control-prev" href="#carousel<?php echo $row['Id_Produto']; ?>" role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carousel<?php echo $row['Id_Produto']; ?>" role="button"
        data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>


</div>
    <?php
    endif;
    $count++;
    $ultimo = $row['Id_Produto'];
  endwhile;


  $sql = "SELECT *
          FROM produto
          ORDER BY Id_Produto WHERE Id_Produto < $ultimo DESC LIMIT 5;";

  echo '<div class="text-xs-center">
          <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link" href=index.php?page='.($_REQUEST['page']+5).'>Anterior</a></li>';
          $total = mysqli_query($conexao,"SELECT COUNT(*) as tot from produto")->fetch_assoc();
          $numero = 1;
            while ($total['tot'] > 0) {
            echo '<li class="page-item"><a class="page-link" href=index.php?page='.$total['tot'].'>'.$numero.'</a></li>';
            $numero++;
            $total['tot'] = $total['tot'] - 5;
          }

          echo '<li class="page-item"><a class="page-link" href=index.php?page='.($_REQUEST['page']-5).'>Próximo</a></li>
          </ul>
        </div>';
