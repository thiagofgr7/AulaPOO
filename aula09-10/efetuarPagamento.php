<?php
    require_once 'pagamentoCartao.php';
    require_once 'pagamentoPix.php';

    $pix = $_POST['txtpix'];
    $valorcartao = $_POST['txtcar'];
    $numcartao = $_POST['txtnumcar'];

    $pagamento1 = new pagamentoPix($pix);
    $pagamento2 = new pagamentoCartao($valorcartao, $numcartao);

    $pagamentos = [$pagamento1, $pagamento2];
    foreach ($pagamentos as $pagamento) {
        echo $pagamento->processar();
    }
?>