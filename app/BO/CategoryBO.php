<?php
namespace App\BO;

class CategoryBO
{
    public int $id;
    public string $name;
    public ?int $parent_category_id;
}
