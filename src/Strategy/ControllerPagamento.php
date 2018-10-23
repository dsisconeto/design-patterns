<?php

namespace DSisconeto\DesignPatterns\Strategy;

use DSisconeto\DesignPatterns\Strategy\MeioPagamento\Cielo;
use DSisconeto\DesignPatterns\Strategy\MeioPagamento\MeioDePagamentoInterface;
use DSisconeto\DesignPatterns\Strategy\MeioPagamento\PagarMe;
use DSisconeto\DesignPatterns\Strategy\MeioPagamento\PagSeguro;

class ControllerPagamento
{
    public function pagamento(Fatura $fatura, int $meioPagamentoId)
    {
        $meioPagamento = $this->criarMeioPagamento($meioPagamentoId);
        $fazerPagamento = new FazerPagamento($meioPagamento);

        if ($fazerPagamento->fazerPagamento($fatura, $meioPagamentoId)) {
            echo "Pagamento Feito com sucesso\n\n";
        } else {
            echo "Não foi possível fazer o pagamento\n\n";
        }

    }

    public function criarMeioPagamento(int $meioPagamentoId): MeioDePagamentoInterface
    {
        switch ($meioPagamentoId) {
            case MeioDePagamentoInterface::CIELO:
                return new Cielo();
            case MeioDePagamentoInterface::PAG_SEGURO:
                return new PagSeguro();
            case MeioDePagamentoInterface::PAGAR_ME:
                return new PagarMe();
            default;
                throw new \InvalidArgumentException('não existem o meio de pagamento');
        }
    }
}