<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Invoice\GetAll;

use PcComponentes\Ddd\Application\Query;
use PcComponentes\Ddd\Domain\Model\ValueObject\Uuid;
use PcComponentes\TopicGenerator\Topic;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Invoice;
use ZoiloMora\FactuSOL\Domain\ServiceName;
use ZoiloMora\System\Domain\CompanyName;

final class GetAllQuery extends Query
{
    private const NAME = 'get_all';
    private const VERSION = '1';

    public static function create(): self
    {
        return parent::fromPayload(Uuid::v4(), []);
    }

    public static function messageName(): string
    {
        return Topic::generate(
            CompanyName::instance(),
            ServiceName::instance(),
            self::VERSION,
            self::messageType(),
            Invoice::modelName(),
            self::NAME,
        );
    }

    public static function messageVersion(): string
    {
        return self::VERSION;
    }

    protected function assertPayload(): void
    {
        // Nothing
    }
}
