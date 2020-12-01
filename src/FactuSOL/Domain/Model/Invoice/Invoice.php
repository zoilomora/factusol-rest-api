<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice;

use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\Address;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\AgentId;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\CarrierPrice;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\CreatedAt;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\CreatorUserId;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\CustomerId;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\DueDates;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Id;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\MethodOfPayment;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\ModifierUserId;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\PriceLines;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Printed;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Reference;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Status;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Time;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Total;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\TypeOfCreation;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Warehouse;
use ZoiloMora\System\Domain\DomainModel;

final class Invoice extends DomainModel
{
    private const NAME = 'invoice';

    private Id $id;
    private Reference $reference;
    private CreatedAt $createdAt;
    private Status $status;
    private Warehouse $warehouse;
    private AgentId $agentId;
    private CustomerId $customerId;
    private Address $address;
    private PriceLines $priceLines;
    private Total $total;
    private MethodOfPayment $methodOfPayment;
    private DueDates $dueDates;
    private Printed $printed;
    private Time $time;
    private CreatorUserId $creatorUserId;
    private ModifierUserId $modifierUserId;
    private CarrierPrice $carrierPrice;
    private TypeOfCreation $typeOfCreation;

    public function __construct(
        Id $id,
        Reference $reference,
        CreatedAt $createdAt,
        Status $status,
        Warehouse $warehouse,
        AgentId $agentId,
        CustomerId $customerId,
        Address $address,
        PriceLines $priceLines,
        Total $total,
        MethodOfPayment $methodOfPayment,
        DueDates $dueDates,
        Printed $printed,
        Time $time,
        CreatorUserId $creatorUserId,
        ModifierUserId $modifierUserId,
        CarrierPrice $carrierPrice,
        TypeOfCreation $typeOfCreation
    ) {
        $this->id = $id;
        $this->reference = $reference;
        $this->createdAt = $createdAt;
        $this->status = $status;
        $this->warehouse = $warehouse;
        $this->agentId = $agentId;
        $this->customerId = $customerId;
        $this->address = $address;
        $this->priceLines = $priceLines;
        $this->total = $total;
        $this->methodOfPayment = $methodOfPayment;
        $this->dueDates = $dueDates;
        $this->printed = $printed;
        $this->time = $time;
        $this->creatorUserId = $creatorUserId;
        $this->modifierUserId = $modifierUserId;
        $this->carrierPrice = $carrierPrice;
        $this->typeOfCreation = $typeOfCreation;
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function reference(): Reference
    {
        return $this->reference;
    }

    public function createdAt(): CreatedAt
    {
        return $this->createdAt;
    }

    public function status(): Status
    {
        return $this->status;
    }

    public function warehouse(): Warehouse
    {
        return $this->warehouse;
    }

    public function agentId(): AgentId
    {
        return $this->agentId;
    }

    public function customerId(): CustomerId
    {
        return $this->customerId;
    }

    public function address(): Address
    {
        return $this->address;
    }

    public function priceLines(): PriceLines
    {
        return $this->priceLines;
    }

    public function total(): Total
    {
        return $this->total;
    }

    public function methodOfPayment(): MethodOfPayment
    {
        return $this->methodOfPayment;
    }

    public function dueDates(): DueDates
    {
        return $this->dueDates;
    }

    public function printed(): Printed
    {
        return $this->printed;
    }

    public function time(): Time
    {
        return $this->time;
    }

    public function creatorUserId(): CreatorUserId
    {
        return $this->creatorUserId;
    }

    public function modifierUserId(): ModifierUserId
    {
        return $this->modifierUserId;
    }

    public function carrierPrice(): CarrierPrice
    {
        return $this->carrierPrice;
    }

    public function typeOfCreation(): TypeOfCreation
    {
        return $this->typeOfCreation;
    }

    public static function modelName(): string
    {
        return self::NAME;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'reference' => $this->reference,
            'createdAt' => $this->createdAt,
            'status' => $this->status,
            'warehouse' => $this->warehouse,
            'agentId' => $this->agentId,
            'customerId' => $this->customerId,
            'address' => $this->address,
            'priceLines' => $this->priceLines,
            'total' => $this->total,
            'methodOfPayment' => $this->methodOfPayment,
            'dueDates' => $this->dueDates,
            'printed' => $this->printed,
            'time' => $this->time,
            'creatorUserId' => $this->creatorUserId,
            'modifierUserId' => $this->modifierUserId,
            'carrierPrice' => $this->carrierPrice,
            'typeOfCreation' => $this->typeOfCreation,
        ];
    }
}
