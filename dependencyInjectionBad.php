<?php
// Non-DI example

class ProductRepository
{
  private $db;
  private $config;
  private $productModel;

  public function __construct()
  {
    $this->db = new Database('user', 'pass', 'hostname', 'dbname');
    $this->config = new Config();
    $this->productModel = new Product();
  }

  public function listProducts()
  {
    print_r($this->productModel->all());
  }
}
