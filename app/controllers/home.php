<?php

	class Home extends Controller {

		public function index($name = '', $age = '') {
		

		}

		public function create($firstname = '', $lastname = '') {
			User::create([
				"firstname" => $firstname,
				"lastname" => $lastname
			]);
		}

		public function read() {
			
			$user_records = array(); 
			$users = User::all();

			foreach ($users as $user) {
			    $data = [
			    	"id" => $user->id,
			    	"lastname" => $user->lastname,
			    	"firstname" => $user->firstname,
			    ];

			    array_push($user_records, $data);
			}

			return $this->view('home/index', $user_records);

		}

	}