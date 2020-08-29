<?php

	class User {
		
		public $name;
		public $age;

		public function printData(){
			echo $this->name . " " . $this->age;
		}

	}