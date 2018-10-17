<?php
namespace DSisconeto\DesignPatterns\Observer;


class EmailObserver implements EstoqueObserveInterface
{

    public function atualizar(string $codigoProduto)
    {
        $this->enviaEmailEstoqueZerado($codigoProduto);
    }


    public function enviaEmailEstoqueZerado(string $codigoProduto)
    {
        echo "Email enviada {$codigoProduto}";
    }

}
