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
    $jogos = array(
      array(
          'titulo' => 'The Blue Ball Journey',
          'descricao' => 'Na jornada da bola azul, pelo mundo de plataformas suspensas e cenários deslumbrantes, a habilidade do jogador brilha. Com pulos calculados e reflexos ágeis, avança-se em direção à meta final. Cada nível vencido é um novo triunfo no desafio emocionante do jogo.'
      ),
      array(
          'titulo' => 'Call of Duty: Black Ops 6',
          'descricao' => 'Call of Duty: Black Ops 6 é o próximo jogo de tiro eletrônico em primeira pessoa desenvolvido pela Treyarch e Raven Software e publicado pela Activision. '
      ),
      array(
          'titulo' => 'Grand Theft Auto VI',
          'descricao' => '“Grand Theft Auto VI” é o próximo jogo de ação-aventura da Rockstar Studios, sucessor de Grand Theft Auto V. Continuando a tradição da série, o jogo promete expandir o mundo aberto e oferecer novas mecânicas de jogo.'
      ),
      array(
          'titulo' => 'The Last of Us Part II',
          'descricao' => 'The Last of Us Part II é um jogo eletrônico de ação-aventura desenvolvido pela Naughty Dog e publicado pela Sony Interactive Entertainment. É o segundo jogo da franquia e foi lançado em 19 de junho de 2020 exclusivamente para PlayStation 4.'
      )

);
 // arrey das imagens dos jogos 
$imagens = [
  '../imagens/script05.png',   // Imagem para o primeiro jogo
  '../imagens/jogo02.jpg',    // Imagem para o segundo jogo
  '../imagens/jogo03.jpg',    // Imagem para o terceiro jogo
  '../imagens/jogo04.jpg'     // Imagem para o quarto jogo
];

  // looping for 
  for ($i = 0; $i < count($jogos); $i++) {
    ?>
      <div class="col">
            <div class="card ms-10" style="width: 20rem;">
                <img src="<?php echo $imagens[$i]; ?>" class="card-img-top" alt="Imagem do Jogo">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $jogos[$i]['titulo']; ?></h5>
                    <p class="card-text"><?php echo $jogos[$i]['descricao']; ?></p>
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