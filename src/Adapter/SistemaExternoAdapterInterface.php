<?php

namespace DSisconeto\DesignPatterns\Adapter;

interface SistemaExternoAdapterInterface
{

    public function enviarPedido(Pedido $pedido);

}