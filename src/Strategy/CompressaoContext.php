<?php

namespace DSisconeto\DesignPattners\Strategy;

class CompressaoContext
{

    /**
     * @var CompressaStrategyAbstract
     */
    private $compressaStrategy;

    public function __construct(CompressaStrategyAbstract $compressaStrategy)
    {
        $this->compressaStrategy = $compressaStrategy;
    }

    public function comprirmir(string $caminhoArquivo)
    {
        $this->compressaStrategy->comprimir($caminhoArquivo);
    }


    /**
     * @param CompressaStrategyAbstract $compressaStrategy
     */
    public function setCompressaStrategy(CompressaStrategyAbstract $compressaStrategy)
    {
        $this->compressaStrategy = $compressaStrategy;
    }

}
