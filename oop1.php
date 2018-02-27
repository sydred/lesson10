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

class Parent
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

interface GetProduct
{
    public function GetProduct();
}
class Cars extends Parent implements HowMuchDoors
{
    public $mark;
    public $model;
    public $color;
    public $doors;
    public function EnoughDoors
    {
        if ($doors<5)
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

$carFord = new car();
$carFord->mark = 'Ford';
$carFord->model = 'Mustang gt';
$carFord->color = 'grey';
$carFord->price = '29500$';
$carFord->doors = '3';



//телевизор

class TV extends Parent implements GetTV
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

class BallpointPen extends Parent implements GoodPen
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

class Duck extends Parent implements DontShoot
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
class Goods extends Parent implements GetProduct
{
    public $name;
    public $category;
    public function getProducts()
    {
        echo $this->name . ' ' . $this->category . '' . $this->price;
    }

}

$goodsApple = new Goods();
$goodsApple->name = 'iPhone';
$goodsApple->category = 'Телефон';
$goodsApple->price = 38000;

$goodsSamsyng = new Goods();
$goodsSamsyng->name = 'Samsung S8';
$goodsSamsyng->category = 'Телефон';
$goodsSamsyng->price = 28000;