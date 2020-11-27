<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure;

final class VersionChecker
{
    public function isValid(int $version): bool
    {
        return $version >= 20101;
    }
}
