<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Agent;

use ZoiloMora\FactuSOL\Domain\Model\Agent\Agent;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\Address;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\City;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\Country;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\State;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\Street;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\ZipCode;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Contact\Contact;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Contact\ValueObject\Email;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Contact\ValueObject\PersonalPhone;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Contact\ValueObject\WorkPhone;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Commission;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\IdentityDocument;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Name;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_AGE;

final class AgentBuilder
{
    public function fromArray(array $data): Agent
    {
        return new Agent(
            Id::from((int) $data[F_AGE::CODAGE]),
            Name::from($data[F_AGE::NOMAGE]),
            IdentityDocument::from($data[F_AGE::DNIAGE]),
            $this->contactFromArray($data),
            $this->addressFromArray($data),
            Commission::from((float) $data[F_AGE::COMAGE]),
        );
    }

    private function contactFromArray(array $data): Contact
    {
        return new Contact(
            WorkPhone::from($data[F_AGE::TEMAGE]),
            PersonalPhone::from($data[F_AGE::TEPAGE]),
            Email::from($data[F_AGE::EMAAGE]),
        );
    }

    private function addressFromArray(array $data): Address
    {
        return new Address(
            Street::from($data[F_AGE::DOMAGE]),
            City::from($data[F_AGE::PROAGE]),
            State::from($data[F_AGE::POBAGE]),
            Country::from($data[F_AGE::PAIAGE]),
            ZipCode::from($data[F_AGE::CPOAGE]),
        );
    }
}
