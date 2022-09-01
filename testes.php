<?php

include_once './includes/_head.php';

$array = array(
    "skins" => array(
         "nome" => "AAAAA",  "img" => "Ahri1.jpg",
    )
);
?>
<main>

<img src="./imgs/<?php echo $array['skins']['img'];?>">
</main>