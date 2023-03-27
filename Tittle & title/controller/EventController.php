<?php
class EventController
{

    function index()
    {
        $productRepository = new ProductRepository();
        $products = $productRepository->getAll();
        
        require 'view/event/index.php';
    }
    function detail()
    {
        $id = $_GET['id'];
        $productRepository = new ProductRepository();
        $product = $productRepository->find($id);

        require 'view/event/detail.php';
    }
}
