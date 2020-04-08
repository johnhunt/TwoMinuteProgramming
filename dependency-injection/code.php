<?php

class ProductRepository
{
  private $db;
  private $config;
  private $productModel;

  public function __construct(Database $db, Config $config, Product $product)
  {
    $this->db = $db;
    $this->config = $config;
    $this->product = $product;
  }

  public function listProduct()
  {
    foreach ($this->productModel->all() as $product) {
      echo $product->title . "\n";
    }
  }
}
