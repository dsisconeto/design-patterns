<?php
namespace DSisconeto\DesignPattners\Strategy;


abstract class CompressaStrategyAbstract
{

    public abstract function comprimir(string $caminhoDoArquivo);

    public function renomeArquivosEmOrdem()
    {
        echo 'Arquivos renomeados';
    }

}
