<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Mummy extends Mobile {
	public function summon() {
		$this->name = "a mummy";
		$this->body = 154;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(346, 370);
		$this->dex = rand(71, 90);
		$this->int = rand(26, 40);
		$this->maxhits = rand(208, 222);
		$this->hits = $this->maxhits;
		$this->damage = 13;
		$this->damageMax = 23;
		$this->resist_physical = rand(45, 55);
		$this->resist_fire = rand(10, 20);
		$this->resist_cold = rand(50, 60);
		$this->resist_poison = rand(20, 30);
		$this->resist_energy = rand(20, 30);
		$this->karma = -4000;
		$this->fame = 4000;
		$this->virtualarmor = 50;

}}
?>
