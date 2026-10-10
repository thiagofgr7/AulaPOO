<?php
    require_once 'pagamento.php';
    class pagamentoPix extends pagamento{
        public function processar(){
            return "<p> Pagamento de R$ {$this->valor} processado via Pix</p>";
        }
    }
?>