<?php

namespace App\Tests;

use App\Entity\Imagen;
use PHPUnit\Framework\TestCase;

class ImagenUnitTest extends TestCase
{
    public function testIsTrue(){
        $imagen= new Imagen();
        $imagen->setFoto('foto')
               ->setTitulo('titulo');
        $this->assertTrue($imagen->getFoto()==='foto');
        $this->assertTrue($imagen->getTitulo()==='titulo');
    }
    public function testIsFalse(){
        $imagen= new Imagen();
        $imagen->setFoto('foto')
               ->setTitulo('titulo');
        $this->assertFalse($imagen->getFoto()==='false');
        $this->assertFalse($imagen->getTitulo()==='false');
    }
    public function testIsEmpty(){
        $imagen= new Imagen();

        $this->assertEmpty($imagen->getFoto()==='false');
        $this->assertEmpty($imagen->getTitulo()==='false');
    }
    
}
