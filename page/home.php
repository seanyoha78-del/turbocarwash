<?php 

    //global variable
    $page['page'] = 'Home';
	$page['subpage'] = $_GET['subpage'] ?? 'home';
    

    //the default class
	class Home {
		private $page;
		private $subpage;
		//protected $homeModel;
	
		function __construct($page) {
			$this->page = $page['page'];
			$this->subpage = $page['subpage'];
			//$this->homeModel = new homeModel();
	
			if (method_exists($this, $this->subpage)) {
				$this->{$this->subpage}();
			} else {
				$this->home();
			}
		}
	
		function home() {
			//$carousel = $this->homeModel->homeCarousel();
			//$hero     = $this->homeModel->homeHero();
	
			include '../views/home.php';

		}
	}
	
	class ActiveHome {
		private $page;
		private $subpage;
	}
	
?> 