<?php
declare(strict_types=1);

namespace ZoiloMora\System\Domain;

abstract class DomainModel implements \JsonSerializable
{
    abstract public static function modelName(): string;
}
