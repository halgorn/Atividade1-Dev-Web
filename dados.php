<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="style.css" rel="stylesheet" >
    <script type="text/javascript" src="funcoes.js"></script>
    <title>Cadastro</title>
  </head>
  <body>   
  <?php $valorJogador1 = rand(1,6);
        $valorJogador2 = rand(1,6);
        $valorComputador1 = rand(1,6);
        $valorComputador2 = rand(1,6);
        $somaJogador = $valorJogador1 + $valorJogador2;
        $somaComputador = $valorComputador1 + $valorComputador2;
   ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="Jogador">
                    <div class="imgjogador">
                        <img src="img/jogador.jpg" alt="HTML tutorial" style="width:120px;height:120px;">
                    </div>
                    <p>Jogador </p>
                    <div class="jogada1">
                        <p>valor da 1ª jogada:</p> 
                    </div>
                    
                    <?php  if ($valorJogador1==1){?>
                        <div class="dadoImgJogador" >
                                <img id="imgJogador" src="img/1.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==2){?>
                        <div class="dadoImgJogador" >
                                <img id="imgJogador" src="img/2.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==3){?>
                        <div class="dadoImgJogador" >
                                <img id="imgJogador" src="img/3.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==4){?>
                        <div class="dadoImgJogador" >
                                <img id="imgJogador" src="img/4.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==5){?>
                        <div class="dadoImgJogador" >
                                <img id="imgJogador" src="img/5.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==6){?>
                        <div class="dadoImgJogador" >
                                <img id="imgJogador" src="img/6.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                   
                    <div class="jogada2" >
                        <p>valor da 2ª jogada:</p>
                    </div>
                    <?php  if ($valorJogador2==1){?>
                        <div class="dadoImgJogador2">
                            <img id="imgJogador2" src="img/1.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador2==2){?>
                        <div class="dadoImgJogador2">
                            <img id="imgJogador2" src="img/2.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador2==3){?>
                        <div class="dadoImgJogador2" >
                            <img id="imgJogador2" src="img/3.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador2==4){?>
                        <div class="dadoImgJogador2" >
                            <img id="imgJogador2" src="img/4.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php  } ?>
                    <?php  if ($valorJogador2==5){?>
                        <div class="dadoImgJogador2" >
                            <img id="imgJogador2" src="img/5.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador2==6){?>
                        <div class="dadoImgJogador2" >
                            <img id="imgJogador2" src="img/6.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                     
                    <div class="soma" >
                        <p>valor somado: <?= $somaJogador ?></p>
                    </div>
                  
                </div>
                <div class="Computador">
                    <div class="imgcomputador">
                        <img src="img/computador.jpg" alt="HTML tutorial" style="width:120px;height:120px;">
                    </div>
                    <p>Computador</p>
                    <div class="aviso" >
                        <p>Computador está jogando os dados</p>
                    </div>
                    <div class="jogada3" >
                        <p>valor da 1ª jogada:</p> 
                        
                    </div>
                    <?php  if ($valorJogador1==1){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/1.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==2){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/2.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==3){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/3.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==4){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/4.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==5){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/5.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==6){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/6.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <div class="jogada4">
                        <p>valor da 2ª jogada:</p>
                    </div>
                    <?php  if ($valorJogador1==1){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/1.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==2){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/2.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==3){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/3.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==4){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/4.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==5){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/5.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <?php  if ($valorJogador1==6){?>
                        <div class="dadoImgComputador" >
                            <img id="imgComputador" src="img/6.png"  alt="HTML tutorial" style="width:120px;height:120px;">
                        </div>
                    <?php } ?>
                    <div class="soma1">
                        <p>valor somado do computador:<?= $somaComputador ?></p>
                    </div>
                </div>
                <?php if ($somaJogador > $somaComputador) { ?>
                    <div class="Resultado">
                        <div class="vitoria" >
                                <h2>Voce Venceu</h2>
                            </div>
                        </div>
                    <?php } else if ($somaJogador < $somaComputador) { ?>
                        <div class="derrota" >
                            <h2>voce Perdeu</h2>
                        </div>
                        <?php} else ($somaJogador == $somaComputador) ?>
                        <div class="empate" >
                            <h2>Empate com o computador</h2>
                        </div>
                        <?php }?>
                    </div>
                <div class="botao">
                    <a href="index.php" class="btn btn-info">Voltar para o Inicio</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>