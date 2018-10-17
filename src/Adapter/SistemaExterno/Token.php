<?php

namespace DSisconeto\DesignPatterns\Adapter\SistemaExterno;
/**
 * Class Token
 * @package DSisconeto\DesignPatterns\Adapter\SistemaExterno
 */

class Token
{

    /** @var  string */
    private $token;
    /** @var string */
    private $usuario;
    /** @var string */
    private $apiKey;


    /**
     * Token constructor.
     * @param string $usuario
     * @param string $apiKey
     */
    public function __construct(string $usuario, string $apiKey)
    {
        $this->usuario = $usuario;
        $this->apiKey = $apiKey;
    }

    /**
     * @return void
     */
    public function gerarToken()
    {
        $this->token = md5("{$this->usuario}{$this->apiKey}");
    }

    /**
     * @return string
     */
    public function getToken(): string
    {

        if (is_null($this->token)) {
            $this->gerarToken();
        }
        return $this->token;
    }

}