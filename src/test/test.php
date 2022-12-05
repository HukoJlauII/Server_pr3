<?php


use PHPUnit\Framework\TestCase;

require_once '../vendor/autoload.php';

class StackTest extends TestCase
{
    protected $list = array();

    protected function MyPow($number, $level)
    {
        $result = 1;
        for ($i = 1; $i <= $level; $i++) {
            $result *= $number;
        }
        return $result;
    }

    protected function MyABS($number)
    {
        if ($number < 0) {
            $number *= -1;
        }
        return $number;
    }

    public function prepare()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $fakeUser = array(
                "name" => $faker->name(),
                "email" => $faker->email(),
                "address" => $faker->address(),
                "phone" => $faker->phoneNumber(),
                "city" => $faker->city(),
            );
            array_push($this->list, $fakeUser);
        }

    }
    public function testName()
    {
        if ($this->list==null)
        {
            $this->prepare();
        }
        for ($i = 0; $i < count($this->list); $i++){
            $this->assertTrue(count(explode(' ',$this->list[$i]["name"]))<4);
        }
    }
    public function testEmail()
    {
        if ($this->list==null)
        {
            $this->prepare();
        }
        $regex = '/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i';
        for ($i = 0; $i < count($this->list); $i++){
            $this->assertTrue((bool)preg_match($regex, $this->list[$i]["email"]));
        }
    }

    public function testPhone()
    {
        if ($this->list==null)
        {
            $this->prepare();
        }
        for ($i = 0; $i < count($this->list); $i++){
            $this->assertFalse(is_int($this->list[$i]["phone"]));
        }
    }
}

?>
