<?php

declare(strict_types=1);

namespace App\Entity\Product;

use App\Enums\Product\ProductColor;
use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    private ProductColor $color;

    public function getColor(): ProductColor
    {
        return $this->color;
    }

    public function setColor(ProductColor $color): void
    {
        $this->color = $color;
    }
}
