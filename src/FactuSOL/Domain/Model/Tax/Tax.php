<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Tax;

use ZoiloMora\FactuSOL\Domain\Model\Tax\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Tax\ValueObject\Value;
use ZoiloMora\System\Domain\DomainModel;

final class Tax extends DomainModel
{
    private const NAME = 'tax';

    private Id $id;
    private Value $value;

    public function __construct(Id $id, Value $value)
    {
        $this->id = $id;
        $this->value = $value;
    }

    public function id(): Id
    {
        return $this->id;
    }

    public function value(): Value
    {
        return $this->value;
    }

    public static function modelName(): string
    {
        return self::NAME;
    }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'value' => $this->value,
        ];
    }
}
