<?php
include "/conexao.php";


$sql = "SELECT *
        FROM produto
        ORDER BY Id_Produto DESC;";

$conexao->query($sql);

while($row = $sql->fetch_assoc()){ 
    $img = mysqli_query($conn,"select Imagem from fotos where Id_Produto = ".$row['Id_Produto']);
    $result = $img->fetch_array();

?>


<div class="row my-2 sombra">
      <div class="col-sm-5 border">
        <div id="carousel<?php echo $row['Id_Produto']; ?>" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/caixa1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/caixa2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/york.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-sm-7 border">
        <h2 class="display-4">Titulo</h2>
        <p class="h4">Cor, altura, largura, comprimento</p>
        <p> É importante questionar o quanto o desafiador cenário globalizado possibilita uma melhor visão global dos
          paradigmas corporativos. É importante questionar o quanto o desafiador cenário globalizado possibilita uma
          melhor visão global dos paradigmas corporativos. É importante questionar o quanto o desafiador cenário
          globalizado possibilita uma melhor visão global dos paradigmas corporativos.</p>
        <span>
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-success">Success</button>
        </span>
      </div>
    </div>
    <div class="row sombra my-2">
      <div class="col-sm-7 border">
        <h2 class="display-4">Titulo</h2>
        <p class="h4">Cor, altura, largura, comprimento</p>
        <p> É importante questionar o quanto o desafiador cenário globalizado possibilita uma melhor visão global dos
          paradigmas corporativos. É importante questionar o quanto o desafiador cenário globalizado possibilita uma
          melhor visão global dos paradigmas corporativos. É importante questionar o quanto o desafiador cenário
          globalizado possibilita uma melhor visão global dos paradigmas corporativos.</p>
        <span>
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-success">Success</button>
        </span>
      </div>
      <div class="col-sm-5 border">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/caixa1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/caixa2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/york.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>