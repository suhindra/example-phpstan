<?php
namespace App;

class Greeter {
	public function greet(string $name = null):string {
		if($name) {
			return "Hello, $name!";
		}
		
		$rand1 = gmp_random(1); // random number from 0 to 1 * bits per limb
		$rand2 = gmp_random(2); // random number from 0 to 2 * bits per limb

		return gmp_strval($rand1) ;
		
	}
}
