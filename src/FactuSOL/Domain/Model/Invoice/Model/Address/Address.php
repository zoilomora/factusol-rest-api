<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address;

use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\City;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\Country;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\IdentityDocument;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\Name;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\State;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\Street;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Model\Address\ValueObject\ZipCode;

final class Address implements \JsonSerializable
{
    private Name $name;
    private IdentityDocument $identityDocument;
    private Street $street;
    private City $city;
    private State $state;
    private Country $country;
    private ZipCode $zipCode;

    public function __construct(
        Name $name,
        IdentityDocument $identityDocument,
        Street $street,
        City $city,
        State $state,
        Country $country,
        ZipCode $zipCode
    ) {
        $this->name = $name;
        $this->identityDocument = $identityDocument;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->zipCode = $zipCode;
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function identityDocument(): IdentityDocument
    {
        return $this->identityDocument;
    }

    public function street(): Street
    {
        return $this->street;
    }

    public function city(): City
    {
        return $this->city;
    }

    public function state(): State
    {
        return $this->state;
    }

    public function country(): Country
    {
        return $this->country;
    }

    public function zipCode(): ZipCode
    {
        return $this->zipCode;
    }

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'identityDocument' => $this->identityDocument,
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'zipCode' => $this->zipCode,
        ];
    }
}
