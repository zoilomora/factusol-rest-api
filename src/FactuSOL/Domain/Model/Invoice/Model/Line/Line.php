<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line;

use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\ArticleId;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Color;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\CostPrice;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Description;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Discount;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Position;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Price;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Quantity;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Size;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\TaxPercentage;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Line\ValueObject\Total;

final class Line implements \JsonSerializable
{
    private Position $position;
    private ArticleId $articleId;
    private Description $description;
    private Quantity $quantity;
    private Price $price;
    private Total $total;
    private CostPrice $costPrice;
    private Discount $discount;
    private TaxPercentage $taxPercentage;
    private ?Size $size;
    private ?Color $color;

    public function __construct(
        Position $position,
        ArticleId $articleId,
        Description $description,
        Quantity $quantity,
        Price $price,
        Total $total,
        CostPrice $costPrice,
        Discount $discount,
        TaxPercentage $taxPercentage,
        ?Size $size,
        ?Color $color
    ) {
        $this->position = $position;
        $this->articleId = $articleId;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->total = $total;
        $this->costPrice = $costPrice;
        $this->discount = $discount;
        $this->taxPercentage = $taxPercentage;
        $this->size = $size;
        $this->color = $color;
    }

    public function position(): Position
    {
        return $this->position;
    }

    public function articleId(): ArticleId
    {
        return $this->articleId;
    }

    public function description(): Description
    {
        return $this->description;
    }

    public function quantity(): Quantity
    {
        return $this->quantity;
    }

    public function price(): Price
    {
        return $this->price;
    }

    public function total(): Total
    {
        return $this->total;
    }

    public function costPrice(): CostPrice
    {
        return $this->costPrice;
    }

    public function discount(): Discount
    {
        return $this->discount;
    }

    public function taxPercentage(): TaxPercentage
    {
        return $this->taxPercentage;
    }

    public function size(): ?Size
    {
        return $this->size;
    }

    public function color(): ?Color
    {
        return $this->color;
    }

    public function jsonSerialize(): array
    {
        return [
            'position' => $this->position,
            'articleId' => $this->articleId,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'total' => $this->total,
            'costPrice' => $this->costPrice,
            'discount' => $this->discount,
            'taxPercentage' => $this->taxPercentage,
            'size' => $this->size,
            'color' => $this->color,
        ];
    }
}
