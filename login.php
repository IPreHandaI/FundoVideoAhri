<?php 

$tituloPagina = 'Home';


include_once './includes/_opcoes.php';
include_once './includes/_dados.php';
include_once './includes/_banco.php';
include_once './includes/_head.php';
?>


     <div class="banner2">
        <video src="./imgs/ahribatalhando.mp4" autoplay muted loop type="mp4"></video>
        <div class="textBox2">
            <h2 id="h2login">Entre e vamos nos divertir de verdade!</h2>
            <input id="aa" class="txtNome" type="text" name="txtNome" id="txtNome" placeholder="Nome Completo">
            <input id="aa" class="txtNome" type="password" name="txtsenha" id="txtsenha" placeholder="Senha">
            <a id="botaologin" href="#">Entrar</a>
        </div>
        <div class="imgBox2">
            <img id="img2" src="./imgs/ahripng8.webp" alt="">
        </div>
    </div>
</main>