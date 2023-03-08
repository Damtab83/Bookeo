<?php

$product = ['name' => 'test', 'description' => 'test 2'];

class Product
{
  protected string $name;
  protected string $description;
  protected float $price;

  public function setPrice(float $price): self
  {
    $this->price =$price;
    return $this;
  }

  public function getPrice():float
  {
    return $this->price;
  }
}

$product1 = new Product();
