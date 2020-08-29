<?php

	class App {

		protected $controller = "Home";
		protected $method = "index";
		protected $params = array();

		public function __construct(){
			
			$url = $this->parseUrl();

			if(file_exists(ucfirst('../app/controllers/' . strtolower( $url[0] ) . '.php'))){
				$this->controller = strtolower( reset( $url ) );
				unset($url[0]);
			}


			require_once '../app/controllers/' . strtolower( $this->controller ) . '.php';

			$this->controller = new $this->controller();

			if( !empty( $url[1] ) ) {
				if( method_exists($this->controller, $url[1]) ){
					$this->method = $url[1];
					unset($url[1]);
				}	 
			}

			$this->params = isset($url) ? array_values($url) : [];
			
			call_user_func_array([$this->controller, $this->method], $this->params);

		}	

		public function parseUrl() { 

			if(isset($_GET['url'])) {
				$url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
				$urlSegments = explode('/', $url);
				return $urlSegments;
			}		

		} 

	}