<?php
//model
include '../model/customerModel.php';

//global variable
$page['page'] = 'Customer';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'login';


    //check for an action
    if (isset($_GET['function'])) {
        //instanciate
        new ActiveCustomer($page);
    } else {
        //instanciate
        new Customer($page);
    }


#------CLASSES
//the default class
class Customer
{
    //encapsulation
    private $page = '';
    private $subpage = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property values
        $this->subpage = $page['subpage']; //assigned the property values

        //run the method
        $this->{$page['subpage']}();
    }

    function login()
    {
        include '../login/login.php'; // get the views
    }

    function register()
    {
        include '../views/home.php';
    }
    
}

//if there is an action
class ActiveCustomer
{
    //encapsulation
    private $page = '';
    private $subpage = '';
    protected $customerModel = '';

    //constructor
    function __construct($page)
    {
        $this->page = $page['page']; //assigned the property values
        $this->subpage = $page['subpage']; //assigned the property values
        $this->customerModel = new customerModel();

        //run the method
        $this->{$_GET['function']}();
    }

    function login()
    {
            $login = $this->customerModel->getEmail($_POST['email']); // one row

            $pass = 0;
            foreach ($login as $lgn){
            if (password_verify($_POST['password'], $lgn['password'])) {
                session_start();

                $_SESSION['loggedIn_id'] = $lgn['email'];
                header('Location: ../page/home.php');
                $page = 1;

            }else{
                echo "<script>alert('Invalid email or Password!');</script>";
            include '../login/login.php';
            }   
        }
    }

    function register() {

        $register = $this->customerModel->register($_POST);

        echo "<script>alert('Register Succesfully');</script>";

        header('../login/login.php');
        exit();
    }


}