<?php

	class Controller {
		
		public function model($model) {

			$model_path = '../app/models/' . $model .'.php';

			if( file_exists($model_path) ){
				require_once $model_path;
				return new $model();
			}

		}


		public function view($view, $data = []){

			$view_path = '../app/views/' . $view. '.php';

			if( file_exists($view_path) ){

				require_once $view_path;

			}

		}

	}