<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects;

use PcComponentes\Ddd\Domain\Model\ValueObject\EnumValueObject;

final class Status extends EnumValueObject
{
    private const PENDING = 'PENDING';
    private const PARTIAL_PENDING = 'PARTIAL_PENDING';
    private const CHARGED = 'CHARGED';
    private const BACK = 'BACK';
    private const CANCELED = 'CANCELED';

    public static function fromPending(): self
    {
        return self::from(self::PENDING);
    }

    public static function fromPartialPending(): self
    {
        return self::from(self::PARTIAL_PENDING);
    }

    public static function fromCharged(): self
    {
        return self::from(self::CHARGED);
    }

    public static function fromBack(): self
    {
        return self::from(self::BACK);
    }

    public static function fromCanceled(): self
    {
        return self::from(self::CANCELED);
    }

    public function isPending(): bool
    {
        return $this->equalTo(self::fromPending());
    }

    public function isPartialPending(): bool
    {
        return $this->equalTo(self::fromPartialPending());
    }

    public function isCharged(): bool
    {
        return $this->equalTo(self::fromCharged());
    }

    public function isBack(): bool
    {
        return $this->equalTo(self::fromBack());
    }

    public function isCanceled(): bool
    {
        return $this->equalTo(self::fromCanceled());
    }
}
