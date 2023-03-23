<?php
class HomeController
{

    function index()
    {
        $categoryRepository = new CategoryRepository();
        $categories = $categoryRepository->getAll();
        include 'view/home/index.php';
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
