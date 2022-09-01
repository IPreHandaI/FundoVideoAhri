<?php 
    $produtos = [
        0 => array('nome' => 'Ahri1', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        1 => array('nome' => 'Ahri2', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        2 => array('nome' => 'Ahri3', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        3 => array('nome' => 'Ahri4', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        4 => array('nome' => 'Ahri5', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        5 => array('nome' => 'Ahri6', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        6 => array('nome' => 'Ahri7', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        7 => array('nome' => 'Ahri8', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        8 => array('nome' => 'Ahri9', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        9 => array('nome' => 'Ahri10', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        10 => array('nome' => 'Ahri11', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        11 => array('nome' => 'Ahri12', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        12 => array('nome' => 'Ahri13', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        13 => array('nome' => 'Ahri14', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg'),
        14 => array('nome' => 'Ahri15', 'preco' => '10M', 'descricao' => 'linda', 'img' => 'Ahri.jpg')
    ];

    $sql = '';
        foreach ($produtos as $i => $value) {
            $nome = $value["nome"];
            $preco = $value["preco"];
            $descricao = $value["descricao"];
            

            $sql = "$sql <br> INSERT INTO produtos(nome, preco, descricao, categoriaid, ativo) VALUES('$nome', '$preco', '$descricao', 0, 1);";
        }
   // echo $sql;
?>
