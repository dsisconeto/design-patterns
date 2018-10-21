<?php
/**
 * Created by PhpStorm.
 * User: dsisconeto
 * Date: 21/10/2018
 * Time: 19:57
 */

namespace DSisconeto\DesignPatterns\Prototype\Image;


use InvalidArgumentException;

abstract class ImagemAbstract
{
    /**
     * @var string
     */
    protected $path;
    /**
     * @var string
     */
    protected $name;

    /**
     * @param int|null $w
     * @param int|null $h
     */
    public function createSize(?int $w = null, ?int $h = null)
    {
        $path = $this->definirPath($w, $h);
        echo "criar image com tamanho {$w}x{$h} na pasta {$path}";
    }

    private function definirPath(?int $w, ?int $h): string
    {
        if (!$this->alturaOuLarguraValida($w, $h)) {
            throw  new InvalidArgumentException(
                'altura e largura não podem ser nulos ou menores que zero ao mesmo tempo'
            );
        }

        if ($this->alturaELarguraValida($w, $h)) {
            return "/{$this->path}/w/$w/h/$h/{$this->name}";
        }

        if ($this->alturaValida($w)) {
            return "/{$this->path}/w/$w/{$this->name}";
        }

        return "/{$this->path}/h/$h/{$this->name}";
    }

    private function alturaELarguraValida(?int $w, ?int $h): bool
    {
        return $this->alturaValida($w) && $this->larguraValida($h);
    }

    private function alturaOuLarguraValida(?int $w, ?int $h): bool
    {
        return $this->alturaValida($w) || $this->larguraValida($h);
    }

    private function alturaValida(?int $w): bool
    {
        return is_null($w) || $w <= 0;
    }

    private function larguraValida(?int $h): bool
    {
        return is_null($h) || $h <= 0;
    }




    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    protected function setPath(string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


}