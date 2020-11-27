<?php
declare(strict_types=1);

namespace ZoiloMora\System\Domain;

use PcComponentes\TopicGenerator\Company;

final class CompanyName extends Company
{
    private const NAME = 'zoilomora';

    public function name(): string
    {
        return self::NAME;
    }
}
