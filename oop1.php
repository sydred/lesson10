<?php

/*/1.Полиформизм - это свойство классов иметь одинаковые методы, которые работают по-разному у каждого элемента.

Наследование - это возможность создания класса со свойствами и методами, которые имеются у каждого элеманта,
благодаря чему производные классы имеют все свойства и методы этого класса, но с возможностью предопределения их.

2. Абстрактный класс - класс, который имеет хотя б 1 абстрактный (не определенный) метод,
у него не может быть экземпляров, он может только выступать родителем (не может иметь
экземпляров класса).

Интерфейс - класс, в котором могут быть определены только методы и только публичные, так же как и абстрактные классы
не могут иметь экземпляры класса.
/**/
//машина

class Parents
{
    public $price;
}

interface HowMuchDoors
{
    public function EnoughDoors();
}

interface GetTV
{
    public function GetScreenSize();
}

interface GoodPen
{
    public function GoodChoice();
}

interface DontShoot
{
    public function DontShoot();
}

interface GetPhone
{
    public function GetPhone();
}

class Car extends Parents implements HowMuchDoors
{
    public $mark;
    public $model;
    public $color;
    public $doors;

    public function EnoughDoors()
    {
        if ($doors < 5)
        {
            return "Машина не для всей семьи";
        }
    }
}

$carChevrolet = new Car();
$carChevrolet->mark = 'Chevrolet';
$carChevrolet->model = 'Comaro';
$carChevrolet->color = 'yellow';
$carChevrolet->price = '3000$';
$carChevrolet->doors = '3';

$carFord = new Car();
$carFord->mark = 'Ford';
$carFord->model = 'Mustang gt';
$carFord->color = 'grey';
$carFord->price = '29500$';
$carFord->doors = '3';



//телевизор

class TV extends Parents implements GetTV
{
    public $mark;
    public $ScreenSize;
    public $display;
    public $resolution;
    public function GetScreenSize()
    {
        return $this->ScreenSize;
    }
}

$TvSamsung = new TV();
$TvSamsung->mark = 'Samsung';
$TvSamsung->ScreenSize = '40"';
$TvSamsung->display = 'LED';
$TvSamsung->resolution = 'Full HD';

$TvSony = new TV();
$TvSony->mark = 'Sony';
$TvSony->ScreenSize = '49"';
$TvSony->display = 'LED';
$TvSony->resolution = '4K ULTRA HD';


//ручка

class BallpointPen extends Parents implements GoodPen
{
    public $mark;
    public $color;
    public function GoodChoice()
    {
        return $this->mark . 'Хороший выбор!';
    }
}

$PenBenu = new BallpointPen();
$PenBenu->mark = 'Benu';
$PenBenu->color = 'black';

$PenEtra = new BallpointPen();
$PenEtra->mark = 'Etra';
$PenEtra->color = 'blue';


//утка

class Duck extends Parents implements DontShoot
{
    public $breed;
    public $dwelling;
    public function DontShoot()
    {
        return $this->breed . 'Не стреляйте!';
    }
}

$duckPekin = new Duck();
$duckPekin->breed = 'Пекинская утка';
$duckPekin->dwelling = 'Китай';

$duckRussia = new Duck();
$duckRussia->breed = 'Русская утка';
$duckRussia->dwelling = 'Россия';


// Товар

class Phone extends Parents implements GetPhone
{
    public $name;
    public $category;
    public function getPhone()
    {
        echo $this->name . ' ' . $this->category . '' . $this->price;
    }

}

$goodsApple = new Phone();
$goodsApple->name = 'iPhone';
$goodsApple->category = 'Телефон';
$goodsApple->price = 38000;

$goodsSamsyng = new Phone();
$goodsSamsyng->name = 'Samsung S8';
$goodsSamsyng->category = 'Телефон';
$goodsSamsyng->price = 28000;
