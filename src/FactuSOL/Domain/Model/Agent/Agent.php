<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Agent;

use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\Address;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Contact\Contact;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Commission;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\IdentityDocument;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Name;
use ZoiloMora\System\Domain\DomainModel;

final class Agent extends DomainModel
{
    private const NAME = 'agent';

    private Id $id;
    private Name $name;
    private IdentityDocument $identityDocument;
    private Contact $contact;
    private Address $address;
    private Commission $commission;

    public function __construct(
        Id $id,
        Name $name,
        IdentityDocument $identityDocument,
        Contact $contact,
        Address $address,
        Commission $commission
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->identityDocument = $identityDocument;
        $this->contact = $contact;
        $this->address = $address;
        $this->commission = $commission;
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function name(): Name
    {
        return $this->name;
    }

    public function identityDocument(): IdentityDocument
    {
        return $this->identityDocument;
    }

    public function contact(): Contact
    {
        return $this->contact;
    }

    public function address(): Address
    {
        return $this->address;
    }

    public function commission(): Commission
    {
        return $this->commission;
    }

    public static function modelName(): string
    {
        return self::NAME;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'identityDocument' => $this->identityDocument,
            'contact' => $this->contact,
            'address' => $this->address,
            'commission' => $this->commission,
        ];
    }
}
