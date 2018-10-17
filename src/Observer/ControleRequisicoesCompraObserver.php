<?php
namespace DSisconeto\DesignPatterns\Observer;


class ControleRequisicoesCompraObserver implements EstoqueObserveInterface
{

    public function atualizar(string $codigoProduto)
    {
        $this->adicionarListaRequisicaoCompra($codigoProduto);
    }

    public function adicionarListaRequisicaoCompra(string $codigoProduto)
    {
        echo "Produto adicionado a lista de requisição {$codigoProduto}";
    }


}
