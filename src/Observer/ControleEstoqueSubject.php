<?php

namespace DSisconeto\DesignPatterns\Observer;

class ControleEstoqueSubject implements SubjectInterface
{
    /**
     * @var EstoqueObserveInterface[]
     */
    protected $observers = [];
    /**
     * @var array
     */
    protected $product = [];


    public function __construct()
    {
    }


    public function atualizarStoque(string $codigoProduto, int $novaQuantidade): bool
    {
        $this->product[$codigoProduto] = $novaQuantidade;
        $this->politicaDeVerificaEstoque($codigoProduto);
        return true;
    }

    public function politicaDeVerificaEstoque(string $codigoProduto)
    {
        if ($this->product[$codigoProduto] < 3) {
            $this->notificarObserver($codigoProduto);
        }
    }


    public function adicionarObserver(EstoqueObserveInterface $estoqueObserve)
    {
        $this->observers[get_class($estoqueObserve)] = $estoqueObserve;
    }


    public function removeObserver(EstoqueObserveInterface $estoqueObserve)
    {
        $className = get_class($estoqueObserve);
        if (!array_key_exists($className, $this->observers)) return;
        unset($this->observers[$className]);
    }

    public function notificarObserver(string $codigoProduto)
    {
        foreach ($this->observers as $observer) {
            $observer->atualizar($codigoProduto);
        }
    }


}
