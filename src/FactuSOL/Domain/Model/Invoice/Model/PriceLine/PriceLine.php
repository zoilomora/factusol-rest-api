<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine;

use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\Net;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\TaxAmount;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\TaxBase;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\TaxPercentage;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\TypeOfTax;

final class PriceLine implements \JsonSerializable
{
    private TaxBase $taxBase;
    private Net $net;
    private TaxPercentage $taxPercentage;
    private TaxAmount $taxAmount;
    private TypeOfTax $typeOfTax;

    public function __construct(
        TaxBase $taxBase,
        Net $net,
        TaxPercentage $taxPercentage,
        TaxAmount $taxAmount,
        TypeOfTax $typeOfTax
    ) {
        $this->taxBase = $taxBase;
        $this->net = $net;
        $this->taxPercentage = $taxPercentage;
        $this->taxAmount = $taxAmount;
        $this->typeOfTax = $typeOfTax;
    }

    public function taxBase(): TaxBase
    {
        return $this->taxBase;
    }

    public function net(): Net
    {
        return $this->net;
    }

    public function taxPercentage(): TaxPercentage
    {
        return $this->taxPercentage;
    }

    public function taxAmount(): TaxAmount
    {
        return $this->taxAmount;
    }

    public function typeOfTax(): TypeOfTax
    {
        return $this->typeOfTax;
    }

    public function jsonSerialize(): array
    {
        return [
            'taxBase' => $this->taxBase,
            'net' => $this->net,
            'taxPercentage' => $this->taxPercentage,
            'taxAmount' => $this->taxAmount,
            'typeOfTax' => $this->typeOfTax,
        ];
    }
}
