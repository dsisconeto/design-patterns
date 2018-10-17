<?php
namespace DSisconeto\DesignPatterns\Adapter;

/**
 * Class Pedido
 * @package DSisconeto\DesignPatterns\Adapter
 */
class Pedido
{
    /** @var string */
    private $codigo;
     /** @var []string */
    private $items;

    /**
     * Pedido constructor.
     * @param string $codigo
     * @param array $items
     */
    public function __construct(string $codigo, array $items)
    {
        $this->codigo = $codigo;
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }





}