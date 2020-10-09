<?php

namespace Animal;

interface Bird extends Animal
{

	public function fly ();

	public function flyWith (Bird $bird);

}