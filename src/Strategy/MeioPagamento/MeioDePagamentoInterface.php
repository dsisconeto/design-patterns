<?php
/**
 * Created by PhpStorm.
 * User: dsisconeto
 * Date: 22/10/2018
 * Time: 22:30
 */

namespace DSisconeto\DesignPatterns\Strategy\MeioPagamento;


use DSisconeto\DesignPatterns\Strategy\Fatura;

interface MeioDePagamentoInterface
{
    const PAGAR_ME = 1;
    const PAG_SEGURO = 2;
    const CIELO = 3;

    public function fazerPagamento(Fatura $fatura): ?string;
}