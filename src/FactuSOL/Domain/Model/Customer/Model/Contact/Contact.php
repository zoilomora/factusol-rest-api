<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact;

use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\ValueObject\Email;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\ValueObject\PersonalPhone;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\ValueObject\WorkPhone;

final class Contact implements \JsonSerializable
{
    private WorkPhone $workPhone;
    private PersonalPhone $personalPhone;
    private Email $email;

    public function __construct(WorkPhone $workPhone, PersonalPhone $personalPhone, Email $email)
    {
        $this->workPhone = $workPhone;
        $this->personalPhone = $personalPhone;
        $this->email = $email;
    }

    public function workPhone(): WorkPhone
    {
        return $this->workPhone;
    }

    public function personalPhone(): PersonalPhone
    {
        return $this->personalPhone;
    }

    public function email(): Email
    {
        return $this->email;
    }

    public function jsonSerialize(): array
    {
        return [
            'workPhone' => $this->workPhone,
            'personalPhone' => $this->personalPhone,
            'email' => $this->email,
        ];
    }
}
