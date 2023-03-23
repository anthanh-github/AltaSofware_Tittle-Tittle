<?php
class EventController
{

    function index()
    {
        $productRepository = new ProductRepository();
        $products = $productRepository->getAll();

        $conds = [];
        $sorts = ['featured' => 'DESC'];
        $featuredProducts = $productRepository->getBy($conds, $sorts, 1, 4);

        $sorts = ['created_date' => 'DESC'];
        $latestProducts = $productRepository->getBy($conds, $sorts, 1, 4);
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
