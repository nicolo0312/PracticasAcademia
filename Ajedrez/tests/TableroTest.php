<?php
namespace Test;
require_once("../vendor/autoload.php");
use PHPUnit\Framework\TestCase;

final class Tablero extends TestCase{
    protected function setUp(): void
    {
        $this->tablero= new \Ajedrez\Tablero();
        $this->tablero->colocarPieza(1,0, new \Ajedrez\Peon("negro"));
        $this->tablero->colocarPieza(1,1, new \Ajedrez\Peon("negro"));
        $this->tablero->colocarPieza(1,2, new \Ajedrez\Peon("negro"));
        $this->tablero->colocarPieza(1,3, new \Ajedrez\Peon("negro"));
        $this->tablero->colocarPieza(1,4, new \Ajedrez\Peon("negro"));
        $this->tablero->colocarPieza(1,5, new \Ajedrez\Peon("negro"));
        $this->tablero->colocarPieza(1,6, new \Ajedrez\Peon("negro"));
        $this->tablero->colocarPieza(1,7, new \Ajedrez\Peon("negro"));
        $this->tablero->colocarPieza(6,0, new \Ajedrez\Peon("blanco"));
        $this->tablero->colocarPieza(6,1, new \Ajedrez\Peon("blanco"));
        $this->tablero->colocarPieza(6,2, new \Ajedrez\Peon("blanco"));
        $this->tablero->colocarPieza(6,3, new \Ajedrez\Peon("blanco"));
        $this->tablero->colocarPieza(6,4, new \Ajedrez\Peon("blanco"));
        $this->tablero->colocarPieza(6,5, new \Ajedrez\Peon("blanco"));
        $this->tablero->colocarPieza(6,6, new \Ajedrez\Peon("blanco"));
        $this->tablero->colocarPieza(6,7, new \Ajedrez\Peon("blanco"));
        $this->tablero->colocarPieza(0,0, new \Ajedrez\Torre("negro"));
        $this->tablero->colocarPieza(0,7, new \Ajedrez\Torre("negro"));
        $this->tablero->colocarPieza(7,0, new \Ajedrez\Torre("blanco"));
        $this->tablero->colocarPieza(7,7, new \Ajedrez\Torre("blanco"));
        $this->tablero->colocarPieza(0,1, new \Ajedrez\Caballo("negro"));
        $this->tablero->colocarPieza(0,6, new \Ajedrez\Caballo("negro"));
        $this->tablero->colocarPieza(7,1, new \Ajedrez\Caballo("blanco"));
        $this->tablero->colocarPieza(7,6, new \Ajedrez\Caballo("blanco"));
        $this->tablero->colocarPieza(0,2, new \Ajedrez\Alfil("negro"));
        $this->tablero->colocarPieza(0,5, new \Ajedrez\Alfil("negro"));
        $this->tablero->colocarPieza(7,2, new \Ajedrez\Alfil("blanco"));
        $this->tablero->colocarPieza(7,5, new \Ajedrez\Alfil("blanco"));
        $this->tablero->colocarPieza(0,3, new \Ajedrez\Reina("negro"));
        $this->tablero->colocarPieza(7,4, new \Ajedrez\Reina("blanco"));
        $this->tablero->colocarPieza(0,4, new \Ajedrez\Rey("negro"));
        $this->tablero->colocarPieza(7,3, new \Ajedrez\Rey("blanco"));
        
    }

    public function testMover(){
        $tablero= new \Ajedrez\Tablero();
        $cd=$tablero->colocarPieza(1,0, new \Ajedrez\Peon("negro"));
        $cd=$tablero->colocarPieza(1,1, new \Ajedrez\Peon("negro"));
        $cd=$tablero->colocarPieza(1,2, new \Ajedrez\Peon("negro"));
        $cd=$tablero->colocarPieza(1,3, new \Ajedrez\Peon("negro"));
        $cd=$tablero->colocarPieza(1,4, new \Ajedrez\Peon("negro"));
        $cd=$tablero->colocarPieza(1,5, new \Ajedrez\Peon("negro"));
        $cd=$tablero->colocarPieza(1,6, new \Ajedrez\Peon("negro"));
        $cd=$tablero->colocarPieza(1,7, new \Ajedrez\Peon("negro"));
        $cd=$tablero->colocarPieza(6,0, new \Ajedrez\Peon("blanco"));
        $cd=$tablero->colocarPieza(6,1, new \Ajedrez\Peon("blanco"));
        $cd=$tablero->colocarPieza(6,2, new \Ajedrez\Peon("blanco"));
        $cd=$tablero->colocarPieza(6,3, new \Ajedrez\Peon("blanco"));
        $cd=$tablero->colocarPieza(6,4, new \Ajedrez\Peon("blanco"));
        $cd=$tablero->colocarPieza(6,5, new \Ajedrez\Peon("blanco"));
        $cd=$tablero->colocarPieza(6,6, new \Ajedrez\Peon("blanco"));
        $cd=$tablero->colocarPieza(6,7, new \Ajedrez\Peon("blanco"));
        $cd=$tablero->colocarPieza(0,0, new \Ajedrez\Torre("negro"));
        $cd=$tablero->colocarPieza(0,7, new \Ajedrez\Torre("negro"));
        $cd=$tablero->colocarPieza(7,0, new \Ajedrez\Torre("blanco"));
        $cd=$tablero->colocarPieza(7,7, new \Ajedrez\Torre("blanco"));
        $cd=$tablero->colocarPieza(0,1, new \Ajedrez\Caballo("negro"));
        $cd=$tablero->colocarPieza(0,6, new \Ajedrez\Caballo("negro"));
        $cd=$tablero->colocarPieza(7,1, new \Ajedrez\Caballo("blanco"));
        $cd=$tablero->colocarPieza(7,6, new \Ajedrez\Caballo("blanco"));
        $cd=$tablero->colocarPieza(0,2, new \Ajedrez\Alfil("negro"));
        $cd=$tablero->colocarPieza(0,5, new \Ajedrez\Alfil("negro"));
        $cd=$tablero->colocarPieza(7,2, new \Ajedrez\Alfil("blanco"));
        $cd=$tablero->colocarPieza(7,5, new \Ajedrez\Alfil("blanco"));
        $cd=$tablero->colocarPieza(0,3, new \Ajedrez\Reina("negro"));
        $cd=$tablero->colocarPieza(7,4, new \Ajedrez\Reina("blanco"));
        $cd=$tablero->colocarPieza(0,4, new \Ajedrez\Rey("negro"));
        $cd=$tablero->colocarPieza(7,3, new \Ajedrez\Rey("blanco"));

        $mover= $tablero->mover(6,0,5,0);//peon
        $this->assertTrue($mover);
        $mover1=$tablero->mover(4,0,3,0);//peon
        $this->assertFalse($mover1);
        $mover2= $tablero->mover(6,0,5,0);//peon que ya no esta en el lugar
        $this->assertFalse($mover1);
        $mover3=$tablero->mover(1,0,2,0);//peon 
        $this->assertTrue($mover3);
        $mover4=$tablero->mover(0,1,2,0);//caballo que se mueve a posicion del peon,
     //   $this->assertFalse($mover4);
        $mover5=$tablero->mover(0,4,6,4);//rey
        $this->assertFalse($mover5);
        $mover6=$tablero->mover(2,2,4,3);
        $this->assertTrue($mover6);

     

        
    }

}