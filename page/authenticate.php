<?php 
    //model
    include '../model/authModel.php';

    //global variable
    $page['page'] = 'Authenticate';
    $page['subpage'] = isset($_GET['subpage'])? $_GET['subpage']: 'login' ;

        //check for an action
        if (isset($_GET['function'])){
            //instanciate
            new ActiveAuthenticate($page);
        }else{
            //instanciate
            new Authenticate($page);
        }
    
    #------CLASSES
    //the default class
    class Authenticate{
        //encapsulation
        private $page = '';
        private $subpage = '';

        //constructor
        function __construct($page) {
            $this->page = $page['page']; //assigned the property values
            $this->subpage = $page['subpage']; //assigned the property values

            //run the method
            $this->{$page['subpage']} ();
        }

        function login(){
            include '../login/admin_login.php'; // get the views
        }
    }

    //if there is an action
    class ActiveAuthenticate{
        //encapsulation
        private $page = '';
        private $subpage = '';
        protected $authModel = '';

        //constructor
        function __construct($page) {
            $this->page = $page['page']; //assigned the property values
            $this->subpage = $page['subpage']; //assigned the property values
            $this->authModel = new authModel();

            //run the method
            $this->{$_GET['function']} ();
        }

        function login() {
            $login = $this->authModel->getEmail($_POST['email']); // one row
        
            if ($login && password_verify($_POST['password'], $login['password'])) {
                
                session_start();

                $_SESSION['loggedIn_id'] = $login['email'];
                $_SESSION['user_type'] = $login['user_type'];
                header('Location: ../page/admin.php');
                exit;
            }
        
            echo "<script>alert('Invalid Username or Password!');</script>";

                include '../login/admin_login.php';
        }
        
    }


?>