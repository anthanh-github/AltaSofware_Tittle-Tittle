<?php
class HomeController
{

    function index()
    {
        require 'view/home/index.php';
    }
    function payment()
    {
        require 'view/home/payment.php';
    }
    function paymentsuccessfully()
    {
        require 'view/home/paymentsuccessfully.php';
    }
}