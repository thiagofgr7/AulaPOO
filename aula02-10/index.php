<?php
    require_once "conta.php";
    require_once "administrador.php";

    $conta = new conta(1, "patati@patata.com", "123456");
    echo $conta->login("2345678") ? "Login realizado com sucesso\n" : "Senha incorreta \n";

    $admiin = new administrador("Moderador");
    $admin->banirJogador("Patati");
?>