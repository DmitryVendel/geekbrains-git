<?php 

class Goods{ //Класс товары
	protected $a;// Высота, ширина, длина
	protected $b;
	protected $c;
	function __construct($a, $b, $c){
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	function v(){ // Объем
		echo $v=$this->a*$this->b*$this->c;

	}
	
}
class TimeGoods extends Goods{
	protected $t;
	function __construct($a, $b, $c, $t){
		parent::__construct($a, $b, $c);
		$this->t = $t;
	}

}
$a1 = new Goods(5,12,32);
$a1->v();

$b1 = new Goods(2, 2, 2);
$b1->v();

$c1 = new TimeGoods(3, 3, 3, 60);
$c1->v();
//Пункт 5
class A {
public function foo() {
static $x = 0;
echo ++$x;
		}
}
$a1 = new A();
$a2 = new A();
$a1->foo(); // Выведет 1234. С каждым вызовом функции x увеличивается на 1
$a2->foo();
$a1->foo();
$a2->foo();


//Пункт 6
class B {
	public function foo() {
	static $x = 0;
	echo ++$x;
		}
}
class C extends B {
	}
$a1 = new B();
$b1 = new C();
$a1->foo();// Так как переменная x статическая, для каждого класса переменная считается отдельно. Выведет 1122
$b1->foo();
$a1->foo();
$b1->foo();
 ?>