<?php
/**
 * Created by PhpStorm.
 * User: dsisconeto
 * Date: 21/10/2018
 * Time: 19:58
 */

namespace DSisconeto\DesignPatterns\Prototype\Image;


class ImagemProfissional extends ImagemAbstract
{

    public function __construct()
    {
        $this->setPath('/profissional');
    }

}