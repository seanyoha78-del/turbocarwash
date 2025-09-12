<?php 

    //model
    //include '../model/contactModel.php';

    //global variable
    $page['page'] = 'Services';
    $page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'services' ;
    
    session_start();

   

        if (isset($_GET['function'])) {
            new ActiveServices($page);
        }else{
            new Services($page);
        }
    


    //the default class
    class Services{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $servicesModel = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			//$this->servicesModel = new servicesModel(); //instance/object
			
			//run the method/behaviour
			$this->{$page['subpage']}(); 
            
		}
    
    function services() {

        include '../views/services.php';
    }     
 }
	
 class ActiveServices {

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