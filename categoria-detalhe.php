<?php 

$tituloPagina = 'Produtos';

include_once './includes/_head.php';
include_once './includes/_dados.php';
include_once './includes/_opcoes.php';
?>

<main>
    <div class="ahridancando">
        <video id="ahridancando" src="./imgs/ahridançando.mp4" autoplay muted loop></video>
        <div class="row">
            <h1>Aqui você pode mudar o seu estilo com muita rapidez e muito glamour!!</h1>
                <?php 
                    for ($i = 0; $i <= 9; $i++) {
                    
                ?>
                <div class="card m-3" style="width: 18rem;">
                    <img class="card-img-top" src="./imgs/<?php echo $categorias['cromas']['Img'];?>" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title"><?php //echo $categorias['categorias']?></h5>
                        <p class="card-text"><?php//echo $categorias['descricao']?></p>
                        <a href="#" class="btn btn-primary">Visitar</a><!-- Quando eu clicar vai aparecer todos os produtos daquela categoria-->
                    </div>
                </div> 

                <?php
                    }
                    //print_r($categorias["skins"]["img"]);
                ?>
            </div>
        </div>

    </div>
    
    
<div class="forma"></div>

</main>



