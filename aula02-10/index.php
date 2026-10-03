<?php
    require_once "conta.php";
    require_once "administrador.php";
    require_once "jogador.php";
    require_once "personagem.php";
    require_once "item.php";
    require_once "inventario.php";

    $conta = new conta(1, "patati@patata.com", "123456");
    echo $conta->login("2345678") ? "Login realizado com sucesso\n" : "Senha incorreta \n";

    $admin = new administrador("Moderador");
    $admin->banirJogador("Patati");

    $jogador = new Jogador("Junim_Capixaba", 15, 3400, 500);
    $jogador->ganharXp(250);
    $jogador->gastarMoedas(120);

    $personagem = new Personagem("Ronaldinho", "Guerreiro", "15");
    $personagem->atacar();

    $item1 = new Item("Faca de pão", "Comum", 50);
    $item2 = new Item("Bola", "Raro", 1200);

    $inventario = new Inventario(20);
    $inventario->adicionarItem($item1);
    $inventario->adicionarItem($item2);
    
    // Usando um item
    $item1->usar();

    // Removendo um item
    $inventario->removerItem($item1);
?>