<?php
/**
 * Created by PhpStorm.
 * User: dsisconeto
 * Date: 22/10/2018
 * Time: 22:34
 */

namespace DSisconeto\DesignPatterns\Strategy\MeioPagamento;


use DSisconeto\DesignPatterns\Strategy\Fatura;

class PagSeguro implements MeioDePagamentoInterface
{
    public function fazerPagamento(Fatura $fatura): ?string
    {
        echo "Fatura {$fatura->getId()} no valor {$fatura->getTotal()} : PagSeguro\n";
        return uniqid('paga_seguro_token_');
    }
}