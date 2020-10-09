<?php

namespace Animal;

final class Crocodile implements Reptile
{

	public $alive = true;
	public $name;

	function __construct ($name)
	{
		$this->name = $name;
	}

	public function isAlive ()
	{
		if ($this->alive)
			echo $this->name . ' is alive!' . PHP_EOL;
		else
			echo $this->name . ' is dead!' . PHP_EOL;
		return $this;
	}

	public function eat ()
	{
		echo $this->name . ' is eating...' . PHP_EOL;
		return $this;
	}

	public function move ()
	{
		echo $this->name . ' is moving...' . PHP_EOL;
		return $this;
	}

	public function swim ()
	{
		echo $this->name . ' is swimming...' . PHP_EOL;
		return $this;
	}

	public function kill (Animal $animal)
	{
		$animal->alive = false;
		echo $this->name . ' killed ' . $animal->name . '!' . PHP_EOL;
		return $this;
	}

}