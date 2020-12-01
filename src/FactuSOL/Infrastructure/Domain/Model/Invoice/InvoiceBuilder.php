<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Invoice;

use ZoiloMora\FactuSOL\Domain\Model\Invoice\Invoice;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\Address;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\City;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\Country;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\IdentityDocument;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\Name;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\State;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\Street;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\ZipCode;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\DueDate\DueDate;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\DueDate\ValueObject\Amount;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\DueDate\ValueObject\Date;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\PriceLine;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\Net;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\TaxAmount;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\TaxBase;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\TaxPercentage;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\PriceLine\ValueObjects\TypeOfTax;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\AgentId;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\CarrierPrice;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\CreatedAt;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\CreatorUserId;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\CustomerId;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\DueDates;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Id;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Lines;
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
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_FAC;

final class InvoiceBuilder
{
    public function fromArray(array $data, Lines $lines): Invoice
    {
        $id = new Id(
            $data[F_FAC::TIPFAC],
            (int) $data[F_FAC::CODFAC],
        );

        return new Invoice(
            $id,
            Reference::from($data[F_FAC::REFFAC]),
            CreatedAt::from($data[F_FAC::FECFAC]),
            $this->statusFromData($data),
            Warehouse::from($data[F_FAC::ALMFAC]),
            AgentId::from((int) $data[F_FAC::AGEFAC]),
            CustomerId::from((int) $data[F_FAC::CLIFAC]),
            $this->addressFromData($data),
            $this->priceLinesFromData($data),
            Total::from((float) $data[F_FAC::TOTFAC]),
            MethodOfPayment::from($data[F_FAC::FOPFAC]),
            $this->dueDatesFromData($data),
            Printed::from($data[F_FAC::IMPFAC]),
            Time::from($data[F_FAC::HORFAC]),
            CreatorUserId::from((int) $data[F_FAC::USUFAC]),
            ModifierUserId::from((int) $data[F_FAC::USMFAC]),
            $this->carrierPriceFromData($data),
            TypeOfCreation::from((int) $data[F_FAC::CREFAC]),
            $lines,
        );
    }

    private function statusFromData(array $data): Status
    {
        $dictionary = [
            0 => static fn () => Status::fromPending(),
            1 => static fn () => Status::fromPartialPending(),
            2 => static fn () => Status::fromCharged(),
            3 => static fn () => Status::fromBack(),
            4 => static fn () => Status::fromCanceled(),
        ];

        $key = (int) $data[F_FAC::ESTFAC];

        return $dictionary[$key]();
    }

    private function addressFromData(array $data): Address
    {
        return new Address(
            Name::from($data[F_FAC::CNOFAC]),
            IdentityDocument::from($data[F_FAC::CNIFAC]),
            Street::from($data[F_FAC::CDOFAC]),
            City::from($data[F_FAC::CPOFAC]),
            State::from($data[F_FAC::CPRFAC]),
            Country::from($data[F_FAC::CPAFAC]),
            ZipCode::from($data[F_FAC::CCPFAC]),
        );
    }

    private function priceLinesFromData(array $data): PriceLines
    {
        return PriceLines::from(
            [
                new PriceLine(
                    TaxBase::from((float) $data[F_FAC::BAS1FAC]),
                    Net::from((float) $data[F_FAC::NET1FAC]),
                    TaxPercentage::from((float) $data[F_FAC::PIVA1FAC]),
                    TaxAmount::from((float) $data[F_FAC::IIVA1FAC]),
                    TypeOfTax::from((int) $data[F_FAC::TIVA1FAC]),
                ),
                new PriceLine(
                    TaxBase::from((float) $data[F_FAC::BAS2FAC]),
                    Net::from((float) $data[F_FAC::NET2FAC]),
                    TaxPercentage::from((float) $data[F_FAC::PIVA2FAC]),
                    TaxAmount::from((float) $data[F_FAC::IIVA2FAC]),
                    TypeOfTax::from((int) $data[F_FAC::TIVA2FAC]),
                ),
                new PriceLine(
                    TaxBase::from((float) $data[F_FAC::BAS3FAC]),
                    Net::from((float) $data[F_FAC::NET3FAC]),
                    TaxPercentage::from((float) $data[F_FAC::PIVA3FAC]),
                    TaxAmount::from((float) $data[F_FAC::IIVA3FAC]),
                    TypeOfTax::from((int) $data[F_FAC::TIVA3FAC]),
                ),
            ],
        );
    }

    private function dueDatesFromData(array $data): DueDates
    {
        $sections = \explode(';', $data[F_FAC::VENFAC]);
        $items = \array_chunk($sections, 2);

        $list = [];

        foreach ($items as $item) {
            if (2 !== \count($item)) {
                continue;
            }

            $date = \DateTime::createFromFormat('d/m/Y', $item[0]);
            $amount = (float) \str_replace(',', '.', $item[1]);

            $list[] = new DueDate(
                Date::from($date->format('Y-m-d')),
                Amount::from($amount),
            );
        }

        return DueDates::from($list);
    }

    private function carrierPriceFromData(array $data): CarrierPrice
    {
        $dictionary = [
            0 => static fn () => CarrierPrice::fromPaid(),
            1 => static fn () => CarrierPrice::fromDue(),
        ];

        $key = (int) $data[F_FAC::PRTFAC];

        return $dictionary[$key]();
    }
}
