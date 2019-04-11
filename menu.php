<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #F7D3E1; box-shadow: 1px 1px 9px 3px rgba(41,41,41,.25);">
  <a class="navbar-brand" href="#"><i class="fas fa-box-open"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/index.php">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sobre.php">Sobre nós</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contato/contato.php">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#login_modal" style="cursor:pointer;"><i class="fas fa-lock"></i></a>
      </li>
      <?php if (isset($_SESSION['Email'])){ ?>
      <li class="nav-item">
        <a class="nav-link" href="/contato/mensagens.php">Mensagens <i class="far fa-comment-dots"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
      </li>
      <?php } ?>

    </ul>
  </div>
</nav>
<?php include "modal_login.php"; ?>
