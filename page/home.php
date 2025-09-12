<?php 

    //model
    //include '../model/contactModel.php';

    //global variable
    $page['page'] = 'Home';
    $page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'home' ;
    
        if (isset($_GET['function'])) {
            new ActiveHome($page);
        }else{
            new Home($page);
        }
    


    //the default class
    class Home{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $homeModel = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			//$this->servicesModel = new servicesModel(); //instance/object
			
			//run the method/behaviour
			$this->{$page['subpage']}(); 
            
		}
    
    function Home() {

        include '../views/home.php';
    }     
 }
	
 class ActiveHome {

    private $page = '';
    private $subpage = '';
    protected $contactModel = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			//$this->contactModel = new contactModel(); //instance/object
			
			//run the method/behaviour
			$this->{$_GET['function']}();        
		}
 }

?> 