<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects;

final class Id implements \JsonSerializable
{
    private string $serial;
    private int $number;

    public function __construct(string $serial, int $number)
    {
        $this->serial = $serial;
        $this->number = $number;
    }

    public function serial(): string
    {
        return $this->serial;
    }

    public function number(): int
    {
        return $this->number;
    }

    public function __toString(): string
    {
        return \sprintf(
            '%s-%s',
            $this->serial,
            \str_pad((string) $this->number, 6, '0', \STR_PAD_LEFT),
        );
    }

    public function jsonSerialize(): string
    {
        return (string) $this;
    }
}
