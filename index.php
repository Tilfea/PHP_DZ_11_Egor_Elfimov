<?php

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
