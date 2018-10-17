<?php

namespace DSisconeto\DesignPatterns\Adapter;

/**
 * Class FazerPedido
 * @package DSisconeto\DesignPatterns\Adapter
 */
class FazerPedido
{

    /**
     * @var SistemaExternoAdapterInterface
     */
    private $sistemaExterno;

    /**
     * FazerPedido constructor.
     * @param SistemaExternoAdapterInterface $sistemaExterno
     */
    public function __construct(SistemaExternoAdapterInterface $sistemaExterno)
    {
        $this->sistemaExterno = $sistemaExterno;
    }

    /**
     * @param array $items
     */
    public function fazerPedido(array $items)
    {
        $pedido = new Pedido(uniqid("pedido"), $items);

        $this->sistemaExterno->enviarPedido($pedido);
    }


}