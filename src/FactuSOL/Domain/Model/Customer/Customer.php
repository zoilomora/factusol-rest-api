<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Customer;

use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\Address;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\Contact;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\FiscalName;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\IdentityDocument;
use ZoiloMora\System\Domain\DomainModel;

final class Customer extends DomainModel
{
    private const NAME = 'customer';

    private Id $id;
    private IdentityDocument $identityDocument;
    private FiscalName $fiscalName;
    private Contact $contact;
    private Address $address;

    public function __construct(
        Id $id,
        IdentityDocument $identityDocument,
        FiscalName $fiscalName,
        Contact $contact,
        Address $address
    ) {
        $this->id = $id;
        $this->identityDocument = $identityDocument;
        $this->fiscalName = $fiscalName;
        $this->contact = $contact;
        $this->address = $address;
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function identityDocument(): IdentityDocument
    {
        return $this->identityDocument;
    }

    public function fiscalName(): FiscalName
    {
        return $this->fiscalName;
    }

    public function contact(): Contact
    {
        return $this->contact;
    }

    public function address(): Address
    {
        return $this->address;
    }

    public static function modelName(): string
    {
        return self::NAME;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'identityDocument' => $this->identityDocument,
            'fiscalName' => $this->fiscalName,
            'contact' => $this->contact,
            'address' => $this->address,
        ];
    }
}
