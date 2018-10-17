<?php

namespace DSisconeto\DesignPatterns\Observer;

interface SubjectInterface
{

    public function adicionarObserver(EstoqueObserveInterface $estoqueObserve);

    public function removeObserver(EstoqueObserveInterface $estoqueObserve);

    public function notificarObserver(string $codigoProduto);

}
