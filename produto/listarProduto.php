<?php
    //inclusão da conexão com banco de dados
    require($_SERVER['DOCUMENT_ROOT']."/conexao.php");
    //A quantidade de valor a ser exibida
    $quantidade = 10;
    //a pagina atual
    $pagina     = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
    //Calcula a pagina de qual valor será exibido
    $inicio     = ($quantidade * $pagina) - $quantidade;
    //Monta o SQL com LIMIT para exibição dos dados  
    $sql = "SELECT * FROM produto ORDER BY data DESC LIMIT $inicio, $quantidade";
    //Executa o SQL
    $res  = mysqli_query($conexao,$sql) or die(mysql_error());
    //Percorre os campos da tabela
    $count = 0;

    while($row = $res->fetch_assoc()) :
        $sqlImg = mysqli_query($conexao,"SELECT Imagem FROM fotos WHERE Id_Produto = ".$row['Id_Produto']);
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
      endwhile;
  /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = "SELECT Id_Produto FROM produto";
  //Executa o SQL
  $qrTotal    = mysqli_query($conexao,$sqlTotal) or die(mysqli_error());
  //Total de Registro na tabela
  $numTotal   = mysqli_num_rows($qrTotal);
  //O calculo do Total de página ser exibido
  $totalPagina= ceil($numTotal/$quantidade);
   /**
    * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
    */
   $exibir = 3;
   /**
    * Aqui montará o link que voltará uma pagina
    * Caso o valor seja zero, por padrão ficará o valor 1
    */
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   /**
    * Aqui montará o link que ir para proxima pagina
    * Caso pagina +1 for maior ou igual ao total, ele terá o valor do total
    * caso contrario, ele pegar o valor da página + 1
    */
   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
   /**
    * Agora monta o Link paar Primeira Página
    * Depois O link para voltar uma página
    */
  /**
    * Agora monta o Link para Próxima Página
    * Depois O link para Última Página
    */
    
    ?>
<nav>
  <ul class="pagination justify-content-center pagination-lg">
        <?php
        echo '<li class="page-item"><a class="page-link" href="/index.php?page=1">Primeira</a></li> ';
        echo '<li class="page-item"><a class="page-link" href="/index.php?page='.$anterior.'" aria-label="Anterior">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Anterior</span>
              </a></li>';
            ?>
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)
        echo '<li class="page-item"><a class="page-link" href="?page='.$i.'"> '.$i.' </a></li>';
  }

        echo '<li class="page-item active"><a class="page-link" href="?page='.$pagina.'">'.$pagina.'</a></li>';

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
        echo '<li class="page-item"><a class="page-link" href="?page='.$i.'"> '.$i.' </a></li>';
  }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

    ?>
    <?php 
    echo '<li class="page-item"><a class="page-link" href="index.php?page='.$posterior.'">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Próximo</span></a></li>';
    echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?page=$totalPagina\">última</a></li></ul>";
    ?>