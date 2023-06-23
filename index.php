<?php

// class Test
// {
    /*
    Модификаторы доступа
    public - доступен извне
    private - доступен из класса
    protected - доступен из класса в зависимости от наследования
    */
//     public $prop;   // public - модификатор доступа
//     public function _test()
//     {

//     };
// }

// $obj1 = new Test();
// $obj1->prop = 'prop1';

// $obj2 = new Test();

// if ($obj1 == $obj2){
//     echo 'yes';
// }else{
//     echo 'no';
// };

/*
инкапсуляция 
наследование 
полиморфизм
*/


class TeaPod
{
    // сначала блок со свойствами
    private $vol = 100;
    private $fulfil = 0;
    private $color = 'red';

    // блок публичных методов
    public function __construct()
    {
        $this->callPrivate();
    }

    public function __destruct()
    {
    echo 'DESTRUCT';
    }

    public function getVol()
    {
        return $this->vol;
    }

    public function setFulfil($arg)
    {
        $this->fulfil = $arg;
    }

    public function getFulfil()
    {
        return $this->fulfil;
    }
    // блок приватных методов
    private function callPrivate()
    {
        // echo 'private';
    }
}

$obj = new TeaPod();
// $obj2 = new TeaPod();
// echo $obj->getVol();
$obj->setFulfil(5);
// echo $obj->getFulfil();
unset($obj);


class ATM
{
    // сначала блок со свойствами
    private $on = true;
    private $bank;
    private $card = false;
    private $blind = false;

    // блок публичных методов
    public function __construct(str $b = 'prior', boolval $o = false){
        $this->bank = $b;
        $this->on = $o;
    }

    public function payment(){
        cashType();

        cashNum();
    }
    public function getBalance(){
        if ($card == true){
            echo 'Выводим текущий баланс из базы';
        } else{
            echo 'Вставьте карту!';
        }

    }
    public function getServices(){
        echo ?> <ul>
        <li><a href='#'>Попполнить баланс мобильного</a></li>
        <li><a href='#'>Оплаты ERIP</a></li>
        <li><a href='#'>Благотворительность</a></li>
        </ul><?php
    }

    public function setCash(){
        cashType();
        cashNum();
        }

    // блок приватных методов
    private function cashType(){
        echo 'BYN';
        echo 'RUR';
        echo 'USD';
        echo 'EURO';
        echo 'PLN';
    }
    private function cashNum(){
        echo '5';
        echo '10';
        echo '20';
        echo '50';
        echo '100';
    }


}

$BNB = new ATM('BNB', true);