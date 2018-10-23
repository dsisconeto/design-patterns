<?php
/**
 * Created by PhpStorm.
 * User: dsisconeto
 * Date: 22/10/2018
 * Time: 22:47
 */

namespace DSisconeto\DesignPatterns\Strategy\MeioPagamento;


use DSisconeto\DesignPatterns\Strategy\Fatura;

class Cielo implements MeioDePagamentoInterface
{

    public function fazerPagamento(Fatura $fatura): ?string
    {
        echo "Fatura {$fatura->getId()} no valor {$fatura->getTotal()} : Cielo\n";
        return uniqid('cielo_token_');
    }
}