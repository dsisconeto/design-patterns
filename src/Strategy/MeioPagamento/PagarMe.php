<?php

namespace DSisconeto\DesignPatterns\Strategy\MeioPagamento;


use DSisconeto\DesignPatterns\Strategy\Fatura;

class PagarMe implements MeioDePagamentoInterface
{


    public function fazerPagamento(Fatura $fatura): ?string
    {
        echo "Fatura {$fatura->getId()} no valor {$fatura->getTotal()} : PagarMe\n";
        return uniqid('pagar_me_token_');
    }
}