<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Customer;

use ZoiloMora\FactuSOL\Domain\Model\Customer\Customer;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\Address;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\City;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\Country;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\State;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\Street;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\ZipCode;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\Contact;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\ValueObject\Email;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\ValueObject\PersonalPhone;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\ValueObject\WorkPhone;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\FiscalName;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\IdentityDocument;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_CLI;

final class CustomerBuilder
{
    public function fromArray(array $data): Customer
    {
        return new Customer(
            Id::from((int) $data[F_CLI::CODCLI]),
            IdentityDocument::from($data[F_CLI::NIFCLI]),
            FiscalName::from($data[F_CLI::NOFCLI]),
            $this->contactFromArray($data),
            $this->addressFromArray($data),
        );
    }

    private function contactFromArray(array $data): Contact
    {
        return new Contact(
            WorkPhone::from($data[F_CLI::TELCLI]),
            PersonalPhone::from(''),
            Email::from($data[F_CLI::EMACLI]),
        );
    }

    private function addressFromArray(array $data): Address
    {
        return new Address(
            Street::from($data[F_CLI::DOMCLI]),
            City::from($data[F_CLI::POBCLI]),
            State::from($data[F_CLI::PROCLI]),
            Country::from($data[F_CLI::PAICLI]),
            ZipCode::from($data[F_CLI::CPOCLI]),
        );
    }
}
