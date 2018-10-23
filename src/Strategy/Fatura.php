<?php

namespace DSisconeto\DesignPatterns\Strategy;

class Fatura
{
    private $id;
    private $total;
    private $transacaoToken;
    private $meioPagamentoId;

    public function __construct(string $id, float $total)
    {
        $this->id = $id;
        $this->total = $total;
    }

    public function podePagar(): bool
    {
        return is_null($this->transacaoToken);
    }

    /**
     * @return mixed
     */
    public function getMeioPagamentoId()
    {
        return $this->meioPagamentoId;
    }

    /**
     * @param mixed $meioPagamentoId
     */
    public function setMeioPagamentoId($meioPagamentoId): void
    {
        $this->meioPagamentoId = $meioPagamentoId;
    }

    /**
     * @return mixed
     */
    public function getTransacaoToken()
    {
        return $this->transacaoToken;
    }

    /**
     * @param mixed $transacaoToken
     */
    public function setTransacaoToken($transacaoToken): void
    {
        $this->transacaoToken = $transacaoToken;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param float $total
     * @return Fatura
     */
    public function setTotal(float $total): Fatura
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }


}