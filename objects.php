<?php

class Car  {
	public $brand = 'noname';
	public $price;
	public $type;
	public $year_of_manufacture;
	public $discount;


	public function slogan() {
		echo $this->brand;
		echo " is a Good Choice" . '<br>';
    }
}

	$audi = new Car(); 

		$audi->brand = 'Porsche Cayenne';
		$audi->price = '40000';
		$audi->type = 'SUV';
		$audi->year_of_manufacture = '2017';

	    $audi->slogan();

    $bmw = new Car();

		$bmw->brand = 'BMW 3';
		$bmw->price = '25000';
		$bmw->type = 'Coupe';
		$bmw->year_of_manufacture = '2018';

		$bmw->slogan();


class Tv {
	public $brand;
	public $price;
	public $diagonal; 
	public $maximum_resolution;
	public $discount;

	public function diagonal() {
    	echo $this->brand;
    	echo " has a diagonal ";
    	echo $this->diagonal . '<br>';
	}
}

    $sony = new Tv();
		$sony->brand = 'Sony KDL-32RE';
		$sony->price = '500';
		$sony->diagonal = '42';
		$sony->maximum_resolution = '4k';

		$sony->diagonal();

	$philips = new Tv();
		$philips->brand = 'Philips 32 PFT';
		$philips->price = '400';
		$philips->diagonal = '48';
		$philips->maximum_resolution = '4k';

		$philips->diagonal();	

class Pen {
	public $brand;
	public $price;
	public $color;
	public $discount;

	public function discount() {
		echo $this->brand;
		echo " with a discount costs " ;
        echo ($this->price - ($this->price * $this->discount / 100)). '<br>';  
    }
}    

	$parker = new Pen();
		$parker->brand = 'Parker Urban';
		$parker->price = '40';
		$parker->color = 'blue';
		$parker->discount = '15';

		$parker->discount();

	$koh_i_noor = new Pen();
		$koh_i_noor->brand = 'KOH-I-NOOR 3PG';
		$koh_i_noor->price = '10';
		$koh_i_noor->color = 'black';
		$koh_i_noor->discount = '2';

		$koh_i_noor->discount();


class Duck {
	public $subspecies;
	public $habitat;
	public $age;
	public $gender;
	public $color;
	public $discount;

	public function duckColor () {
		if (($this->age) > 3) {
			echo 'All old ducks have color ';
			echo $this->color = 'grey' . '<br>';
		}else {
			echo 'Young ';
			echo $this->subspecies;
			echo ' has color ';
			echo $this->color . '<br>';	
		}
	}
}

$acuta = new Duck();
	$acuta->subspecies = 'Acuta';
	$acuta->age = 2;
	$acuta->color = 'yellow-black';

	$acuta->duckColor();

$penelope = new Duck();
	$penelope->subspecies = 'Penelope';
	$penelope->age = 4;
	$penelope->color = 'brown-white';

	$penelope->duckColor();	

class Item {
	public $name;
	public $category;
	public $price;
	public $weight;
	public $normalDiscount;
	public $normalDelivery = '5';

	public function deliveryCosts() {
		if (($this->weight) < 4.5) {
			echo "Delivery $this->name will cost you ";
			echo "$this->normalDelivery $";

		} elseif (($this->weight) > 5 && ($this->weight) < 20)  {
			echo "Delivery $this->name will cost you ";
			echo ($this->weight * 1.1) . ' $<br>';

		} elseif (($this->weight) > 10 ) {
			echo "Delivery $this->name will cost you ";
			echo ($this->weight * 1.25 ) . ' $<br>';
		}
	}
}

$wardrobe = new Item();
	$wardrobe->name = 'Wardrobe for kitchen';
	$wardrobe->category = 'Furniture';
	$wardrobe->weight = '55';

	$wardrobe->deliveryCosts();

$bumper = new Item();
   	$bumper->name = 'Front Bumper AUDI A4';
   	$bumper->category = 'Autoparts';
   	$bumper->weight = '18';	

   	$bumper->deliveryCosts();
?>