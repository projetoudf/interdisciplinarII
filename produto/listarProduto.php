<?php

$sql = "SELECT *
        FROM produto
        ORDER BY Id_Produto DESC;";

$res = $conexao->query($sql);
$count = 0;
while($row = $res->fetch_assoc()){ 
    $sqlImg = mysqli_query($conexao,"SELECT Imagem FROM fotos WHERE Id_Produto = ".$row['Id_Produto']);
?>
<?php if($count % 2 == 0){ ?>
<div class="row my-1 sombra">
  <div class="col-sm-5 border">
    <div id="carousel<?php echo $row['Id_Produto']; ?>" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
            $contador = 0;
            while($img = $sqlImg->fetch_assoc()){
              echo '<div class="carousel-item '; 
                if ($contador > 0){
                  echo " ";
                }else{
                  echo "active";
                }
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

  <div class="col-sm-7 border">
    <h2 class="display-4"><?php echo $row['Nome_Produto']; ?></h2>
    <p class="h4">Cor: <?php echo $row['Cor']; ?>, Altura: <?php echo $row['Altura']; ?>, Largura:
      <?php echo $row['Largura']; ?>, Comprimento: <?php echo $row['Comprimento']; ?></p>
    <p> <?php echo $row['Sobre']; ?></p>
    <span>
      <button type="button" class="btn btn-primary">Gostei!</button>
      <button type="button" class="btn btn-warning">Editar</button>
      <button type="button" class="btn btn-danger">Excluir</button>
    </span>
  </div>
</div>
<?php }else{ ?>
  <div class="row my-1 sombra">

  <div class="col-sm-7 border">
    <h2 class="display-4"><?php echo $row['Nome_Produto']; ?></h2>
    <p class="h4">Cor: <?php echo $row['Cor']; ?>, Altura: <?php echo $row['Altura']; ?>, Largura:
      <?php echo $row['Largura']; ?>, Comprimento: <?php echo $row['Comprimento']; ?></p>
    <p> <?php echo $row['Sobre']; ?></p>
    <span>
      <button type="button" class="btn btn-primary">Gostei!</button>
      <button type="button" class="btn btn-warning">Editar</button>
      <button type="button" class="btn btn-danger">Excluir</button>
    </span>
  </div>

  <div class="col-sm-5 border">
    <div id="carousel<?php echo $row['Id_Produto']; ?>" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
            $contador = 0;
            while($img = $sqlImg->fetch_assoc()){
              echo '<div class="carousel-item '; 
                if ($contador > 0){
                  echo " ";
                }else{
                  echo "active";
                }
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


</div>
    <?php
    } 
    $count++;
  } ?>

