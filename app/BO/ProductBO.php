<?php
namespace App\BO;

class ProductBO
{
    public int $id;
    public string $name;
    public ?string $description;
    public string $sku;
    public float $price;
    public int $category_id;
}

