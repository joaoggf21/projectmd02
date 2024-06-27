<!doctype html>
<html lang="pt-br">
<!--cabeçalho-->

<head>
  <link rel="icon" type="image/logosite.png" href="imagens/logosite.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TechGames</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="../style.css" rel="stylesheet" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TechGames</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Developers</a>
          </li>
          
              </li>
              
            </ul>
          </li>
          <li class="nav-item">

          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="d-flex justify-content-center ms-5 mt-5">
    <?php
    $array = ['../imagens/script05.png'];
    for ($i = 0; $i < 4; $i++) {
    ?>
      <div class="col">
        <div class="card ms-10" style="width: 20rem;">
          <img src="<?php echo $array[$i] ?>" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">The Blue Ball Journeu</h5>
            <p class="card-text">"The Blue Ball Journey" é um jogo encantador onde você guia uma bola azul através de labirintos desafiadores e cenários coloridos. Com controles simples e uma mecânica viciante, cada nível apresenta novos quebra-cabeças e obstáculos intrigantes. Prepare-se para uma aventura emocionante e cheia de surpresas enquanto busca pela saída em cada fase deste jogo cativante.</p>
            <a href="#" class="btn btn-primary">Detalhes</a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>