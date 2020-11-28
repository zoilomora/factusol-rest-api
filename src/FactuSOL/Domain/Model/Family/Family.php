<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Family;

use ZoiloMora\FactuSOL\Domain\Model\Family\ValueObject\Description;
use ZoiloMora\FactuSOL\Domain\Model\Family\ValueObject\Id;
use ZoiloMora\System\Domain\DomainModel;

final class Family extends DomainModel
{
    private const NAME = 'family';

    private Id $id;
    private Description $description;

    public function __construct(Id $id, Description $description)
    {
        $this->id = $id;
        $this->description = $description;
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function description(): Description
    {
        return $this->description;
    }

    public static function modelName(): string
    {
        return self::NAME;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'description' => $this->description,
        ];
    }
}
