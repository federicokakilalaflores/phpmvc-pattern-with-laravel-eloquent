<?php

	class Home extends Controller {

		public function index($name = '', $age = '') {
		
			$user =	$this->model( 'User' );
			$user->name = $name;
			$user->age = $age;

			$this->view('home/index', ["name" => $user->name, "age" => $user->age]);

		}

		public function test() {
			echo 'home/test request!';
		}

	}