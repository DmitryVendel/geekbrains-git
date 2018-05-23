<?
abstract class Goods{
	private $price = 50;
	abstract protected function getFinalePrice();
	public function getPrice(){
		return $this->price;
	}
}

class DigitalGoods extends Goods{
	private $price;
	function __construct(){
		$this->price = parent::getPrice();
	}
	public function getFinalePrice(){
		echo $this->price/2;
	}
}	

class NumGoods extends Goods{
	private $n;
	private $price;
	public function setNum($n){
		$this->n = $n;
	}
	function __construct(){
		$this->price = parent::getPrice();
	}

	public function getFinalePrice(){
		echo '<br />'.$this->price*$this->n;
	}
}

class WeightGoods extends Goods{
	private $w;
	private $price;
	public function setWeight($w){
		 $this->w = $w;
	}
	function __construct(){
		$this->price = parent::getPrice();
	}
	public function getFinalePrice(){
		echo '<br />'.$this->price*$this->w;
	}		
}

$a1 = new DigitalGoods;
$b1 = new NumGoods;
$c1 = new WeightGoods;
$b1-> setNum(15);
$c1-> setWeight(23.05);
$a1-> getFinalePrice();
$b1-> getFinalePrice();
$c1-> getFinalePrice();
?>