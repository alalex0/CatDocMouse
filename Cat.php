<?php
/*
1. Создать классы Dog, Cat и Mouse. 
2. Реализовать интерфейсы в добавленных классах, учитывая что:
Кот(Cat) может передвигаться, может кого-то съесть и может быть сам съеден.
Мышь(Mouse) может передвигаться и может быть съедена.
Собака(Dog) может передвигаться и съесть кого-то.
*/
/*
Класс
Мышь Бежит ыл съеден другим животгным
Кот
Собака

Интерфейсы
Бежит
Съел другое животное(Был съеден другим животгным $animal)
Был съеден другим животгным

//с абстрактным классом - Бежит
$speed скорость задать в конструкторе
function run(){
	"Животное бежит со скоростью $speed"
}

*/

require_once "MoveHandler.php";
require_once "EatHandler.php";
require_once "EatingHandler.php";

class Cat implements MoveHandler, EatHandler, EatingHandler
{
	private $name;
	public function __conctruct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
	public function move(){
		echo "Движение $this->name";

	}
	public function eat(){
		echo "Кот был съеден";
	}

	public function eating(EatHandler $animal){
		echo "Кот съел " . $animal->getName();
	}


}


$cat = new Cat();
$cat->move();

$mouse = new Mouse();
$cat->eating($mouse);

$cat->move();



?>