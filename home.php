<?php 

$tituloPagina = 'Home';

include_once './includes/_head.php';
include_once './includes/_opcoes.php';
include_once './includes/_dados.php';
include_once './includes/_banco.php';
?>


<?php 
        //crio uma variavel que contem SQL executado
        $sql = "SELECT * FROM produtos WHERE Ativo = 1 LIMIT 3";
        //executa o comando SQL
        $exec = mysqli_query($conn ,$sql);
        //informar a qauntidade de registros de dados
        $numProdutos = mysqli_num_rows($exec);
        //percorre todos os dados extraidos do banco
        while ($dados = mysqli_fetch_assoc($exec)) {
        
           
           
            /*serve para ver se esta entregando tudo do banco de dados
            echo '<pre>';
            print_r($dados);
            echo '</pre>';
            */

       
       
            }
        ?>
<main>

     <?php
     
     if (isset( $_POST['txtNome'])) {
        $nome = strtoupper($_POST['txtNome'] ); 
        $a = strtoupper($_POST['txttlf'] ); 
        $b = strtoupper($_POST['txtemail'] ); 
        $c = strtoupper($_POST['txtsenha'] ); 
        echo $nome . "<br>";
        echo $a . "<br>";
        echo $b . "<br>";
        echo $c . "<br>";
    }

    
    ?>
    
    

<div class="banner">
        <video src="./imgs/videoahri.mp4" autoplay muted loop type="mp4"></video>
        
        <div class="imgBox">
        <img id="img" src="./imgs/ahripng7.png" alt="">
        </div>
        <div class="textBox">
        <h1 id="h1">Antes de entrar para o mundo da Ahri, faça o seu login!</h1>
    
        <form action="./home.php" method="post">     
            <input id="a" class="txtNome" type="text" name="txtNome" id="txtNome" placeholder="Nome Completo" required>
            <input id="a" class="txtNome" type="tel" name="txttlf" id="txttlf" placeholder="Número de telefone" required>
            <input id="a" class="txtNome" type="email" name="txtemail" id="txtemail" placeholder="E-mail" required>
            <input id="a" class="txtNome" type="password" name="txtsenha" id="txtsenha" placeholder="Senha" required>
            <div class="row">
                <div class="col-6"><input id="botao" class="botao" type="submit" value="CADASTRAR"></div>
               
            
        </form>

            <div class="col-6"><a href="login.php" id="botao2" type="button" class="btn btn-primary">Já possui uma conta?</a>
</div>
        </div>
    </div>
</div>
</main>