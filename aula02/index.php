<?php
    //Importar as classes
    require_once 'src/Personagem.php';

    //Avisar o php classe que iremos usar
    use aula02\Personagem;
    echo "===========TESTE DE PERSONAGEM===========\n";
    echo "<br>";
    //criar um personagem
    $heroi = new personagem("Neymaru", 100);
    echo "<br>";
    $heroi->receberDano(20);
    echo "<br>";
    $heroi->curar(10);
?>