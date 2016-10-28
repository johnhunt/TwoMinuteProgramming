<?php
// Non-DI example

class ProductRepository
{
  private $db;
  private $config;
  private $productModel;

  public function __construct(Database $db,
  Config $config, Product $product)
  {
    $this->db = $db;
    $this->config = $config;
    $this->productModel = $product;
  }

  public function listProducts()
  {
    print_r($this->productModel->all());
  }
}


/**
Notes:

1. Stick the title at the top. Possibly add preroll thing with jingle? Possibly not. Yes, do this, makes it more fun.
2. One minute nowhere near enough, make these videos 2 minutes.
3. As clear and consice as possible
4. Link off to decent other videos (no harm in sharing, will help, in fact mention in this video)
5. Include links to github, blog, twitter etc.
6. Note, currently it's taking about an hour to produce one of these videos. Could make at lunch and then dub in evenings?

Commentary:

Hi everyone, I'm John Hunt and today I'm going to show you what dependancy injection is.

You can download the source code from the link in the description below,

*/
