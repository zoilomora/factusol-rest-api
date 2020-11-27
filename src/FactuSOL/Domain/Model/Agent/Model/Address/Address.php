<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address;

use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\City;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\Country;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\State;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\Street;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\ZipCode;

final class Address implements \JsonSerializable
{
    private Street $street;
    private City $city;
    private State $state;
    private Country $country;
    private ZipCode $zipCode;

    public function __construct(Street $street, City $city, State $state, Country $country, ZipCode $zipCode)
    {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->zipCode = $zipCode;
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
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'zipCode' => $this->zipCode,
        ];
    }
}
