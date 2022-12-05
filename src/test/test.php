<?php


use PHPUnit\Framework\TestCase;
require 'vendor/autoload.php';

class StackTest extends TestCase
{
    protected $list = array();


    public function createFixtures()
    {
        $faker = Faker\Factory::create();
        echo $faker->name();
        echo $faker->email();
        echo $faker->text();
    }

    public function testAbs(){
        $this->createFixtures();
        for ($i = 2; $i < count($this->list); $i+=5){
            $this->assertSame($this->list[$i], abs($this->list[$i - 2]));

        }
    }
    public function testAbs2(){
        $this->createFixtures();
        for ($i = 2; $i < count($this->list); $i+=5){

            $this->assertSame($this->list[$i + 1], abs($this->list[$i - 1]));
            $this->assertTrue(false);
        }
    }
    public function testPow(){
        $this->createFixtures();
        for ($i = 2; $i < count($this->list); $i+=5){

            $this->assertSame($this->list[$i + 2], pow($this->list[$i - 2], $this->list[$i - 1]));
        }
    }


}
$test=new StackTest();
$test->createFixtures();
?>
