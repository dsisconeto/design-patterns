<?php
namespace DSisconeto\DesignPatterns\Adapter\SistemaExterno;

/**
 * Class SistemaExterno
 * @package DSisconeto\DesignPatterns\Adapter\SistemaExterno
 */
class SistemaExterno
{


    /**
     * @var Token
     */
    private $token;


    /**
     * SistemaExterno constructor.
     * @param Token $token
     */
    public function __construct(Token $token)
    {
        $this->token = $token;

    }


    /**
     * @param string $usuario
     * @param string $apiKey
     * @return SistemaExterno
     */
    public static function createPedidoGateway(string $usuario, string $apiKey): SistemaExterno{

        $token = new Token($usuario, $apiKey);
        return  new SistemaExterno($token);
    }


    /**
     * @param string $codigo
     * @param array $items
     */
    public function pedido(string $codigo, array $items) {
        
        echo "Enviando o pedido {$codigo} \n";
        echo "Token {$this->token->getToken()} \n";
        echo "Items: \n";
        foreach($items as $item) {
            echo "\t{$item}\n";
        }           
    }



}