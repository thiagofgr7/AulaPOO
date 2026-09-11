<?php
    require "usuario.php";

    /*$aluno = new usuario();
    $aluno ->nome = "Maria";
    $aluno ->idade = 18;
    $aluno ->email = "maria@ig.com.br";

    $aluno2= new usuario();
    $aluno2 ->nome = "Joaquim";
    $aluno2 ->idade = 30;
    $aluno2 ->email = "joaquim@icq.com.br";

    var_dump($aluno);
    echo "<br>";
    var_dump("$aluno2");*/

    $aluno = new usuario();
    $aluno ->setNome ("Maria");
    $aluno ->setIdade (18);
    $aluno ->setEmail ("maria@ig.com.br");

    $aluno2= new usuario();
    $aluno2 ->setNome ("Joaquim");
    $aluno2 ->setIdade (30);
    $aluno2 ->setEmail ("joaquim@icq.com.br");

    echo "<p>Nome: {$aluno->getNome()}</p>";
    echo "<p>Idade: {$aluno->getIdade()}</p>";
    echo "<p>Email: {$aluno->getEmail()}</p>";
    echo "<br>";
    echo "<p>Nome: {$aluno2->getNome()}</p>";
    echo "<p>Idade: {$aluno2->getIdade()}</p>";
    echo "<p>Email: {$aluno2->getEmail()}</p>";
?>