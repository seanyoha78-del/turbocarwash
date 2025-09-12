<?php

    include '../model/adminModel.php';

    //global variable
	$page['page'] = 'Admin';
	$page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']:'dashboard' ;

        //check for an action
		if (isset($_GET['function'])){
			//instanciate
			new ActiveAdmin($page);
		}else{
			//instanciate
			new Admin($page);
		}

    #--------------------------------------------------------------#
	#--- CLASSES
	#--------------------------------------------------------------#
	//the default class
	class Admin{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $adminModel = '';

        //constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			$this->adminModel = new adminModel(); //instance/object
			
			//run the method/behaviour
			$this->{$page['subpage']}();
		}

        function dashboard() {
            
            include '../admin/dashboard.php';
        }

        function newbooking(){

            include '../admin/new_booking.php';
        }

        function booking(){

            include '../admin/Bookings.php';
        }

        function completebooking(){

            include '../admin/complete_booking.php';
        }

        function inquireis(){

            include '../admin/enquiries.php';
        }

        function washingpoint(){

            include '../admin/washing_points.php';
        }
    }
		
    //if there is an action
	class ActiveAdmin{
		//encapsulation
		private $page = '';
		private $subpage = '';
		protected $adminModel = '';
		
		//constructor
		function __construct ($page){
			$this->page = $page['page']; //assigned the property value
			$this->subpage = $page['subpage']; //assigned the property value
			
			$this->adminModel = new adminModel(); //instance/object
			
			//run the method/behaviour
			$this->{$_GET['function']}();
		}

        function getBooking() {
            // get all the bookings
            $bookings = $this->adminModel->getBooking();
        
            // initialize $getMsg as null by default
            $getMsg = null;
        
            // check if msg_id is provided and valid
            if (!empty($_GET['msg_id']) && is_numeric($_GET['msg_id'])) {
                $msg_id = (int) $_GET['msg_id']; // safe cast
                $getMsg = $this->adminModel->viewmsg($msg_id);
            }
        
            // load the view
            include '../admin/new_booking.php';
        }
        
    }