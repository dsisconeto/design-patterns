<?php

namespace DSisconeto\DesignPatterns\Adapter\SistemaExterno;



use DSisconeto\DesignPatterns\Adapter\Pedido;
use DSisconeto\DesignPatterns\Adapter\SistemaExternoAdapterInterface;

/**
 * Class SistemaExternoAdpater
 * @package DSisconeto\DesignPatterns\Adapter\SistemaExterno
 */
class SistemaExternoAdpater implements SistemaExternoAdapterInterface {


    /**
     * @var SistemaExterno
     */
    private $sistemaExterno;


    /**
     * SistemaExternoAdpater constructor.
     * @param SistemaExterno $sistemaExterno
     */
    public function __construct(SistemaExterno $sistemaExterno) {
         $this->sistemaExterno = $sistemaExterno;
    }


    /**
     * @param Pedido $pedido
     */
    public function enviarPedido(Pedido $pedido)
    {
        $this->sistemaExterno->pedido($pedido->getCodigo(), $pedido->getItems());
    }
    
}