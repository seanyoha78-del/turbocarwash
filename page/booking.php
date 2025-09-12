<?php
//model
include '../model/bookingModel.php';

//global variable
$page['page'] = 'Booking';
$page['subpage'] = isset($_GET['subpage']) ? $_GET['subpage'] : 'booking';

//check for an action
if (isset($_GET['function'])) {
    //instanciate
    new ActiveBooking($page);
} else {
    //instanciate
    new Booking($page);
}

#------CLASSES
//the default class
class Booking
{
    private $page = '';
    private $subpage = '';

    function __construct($page)
    {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];

        //run the method
        $this->{$page['subpage']}();
    }

    function booking()
    {
        include '../views/services.php'; // load the view
    }
}

//if there is an action
class ActiveBooking
{
    private $page = '';
    private $subpage = '';
    protected $bookingModel = '';

    function __construct($page)
    {
        $this->page = $page['page'];
        $this->subpage = $page['subpage'];
        $this->bookingModel = new bookingModel();

        // Pass POST data when function is "createBooking"
        if ($_GET['function'] === 'createBooking') {
            $this->createBooking($_POST);
        } else {
            $this->{$_GET['function']}();
        }
    }

    function createBooking($post)
    {
        // Combine Date + Time
        $scheduled_at = $post['washdate'] . ' ' . $post['washtime'];

        $data = [
            'FullName'      => $post['fname'],
            'user_id'       => 1,
            'vehicle_id'    => 1,
            'scheduled_at'  => $scheduled_at,
            'Contact'       => $post['contactno'],
            'package_type'  => $post['packagetype'],   // ✅ match with model
            'washing_point' => $post['washingpoint'],  // ✅ match with model
            'notes'         => $post['message']
        ];
        

        // Call the model correctly
        $success = $this->bookingModel->createBooking($data);

        if ($success) {
            echo "<script>alert('Booking successful!');window.location.href='booking.php';</script>";
        } else {
            echo "<script>alert('Booking failed! Please try again.');</script>";
        }
    }
}
