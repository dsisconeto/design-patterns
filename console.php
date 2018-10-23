<?php

use DSisconeto\DesignPatterns\Strategy\ControllerPagamento;
use DSisconeto\DesignPatterns\Strategy\Fatura;
use DSisconeto\DesignPatterns\Strategy\MeioPagamento\MeioDePagamentoInterface;

require_once __DIR__ . '/vendor/autoload.php';

$controller = new ControllerPagamento();
$fatura = new Fatura(uniqid(), 100);


$controller->pagamento($fatura, MeioDePagamentoInterface::CIELO);

$controller->pagamento($fatura, MeioDePagamentoInterface::PAG_SEGURO);

$fatura->setMeioPagamentoId(null);
$fatura->setTransacaoToken(null);

$controller->pagamento($fatura, MeioDePagamentoInterface::PAGAR_ME);
