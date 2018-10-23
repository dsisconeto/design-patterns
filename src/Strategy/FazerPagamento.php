<?php
/**
 * Created by PhpStorm.
 * User: dsisconeto
 * Date: 22/10/2018
 * Time: 22:07
 */

namespace DSisconeto\DesignPatterns\Strategy;


use DSisconeto\DesignPatterns\Strategy\MeioPagamento\MeioDePagamentoInterface;

class FazerPagamento
{

    /**
     * @var MeioDePagamentoInterface
     */
    private $meioDePagamento;

    public function __construct(MeioDePagamentoInterface $meioDePagamento)
    {

        $this->meioDePagamento = $meioDePagamento;
    }


    public function fazerPagamento(Fatura $fatura, int $meioPagamentoId): bool
    {
        if (!$fatura->podePagar()) {
            return false;
        }
        $tokenTransacao = $this->meioDePagamento->fazerPagamento($fatura);
        if (is_null($tokenTransacao)) {
            return false;
        }

        $fatura->setMeioPagamentoId($meioPagamentoId);
        $fatura->setTransacaoToken($tokenTransacao);
        return true;
    }


    /**
     * @return MeioDePagamentoInterface
     */
    public function getMeioDePagamento(): MeioDePagamentoInterface
    {
        return $this->meioDePagamento;
    }

    /**
     * @param MeioDePagamentoInterface $meioDePagamento
     */
    public function setMeioDePagamento(MeioDePagamentoInterface $meioDePagamento): void
    {
        $this->meioDePagamento = $meioDePagamento;
    }


}