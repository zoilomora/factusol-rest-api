<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Tax\GetById;

use PcComponentes\Ddd\Application\Query;
use PcComponentes\Ddd\Domain\Model\ValueObject\Uuid;
use PcComponentes\TopicGenerator\Topic;
use ZoiloMora\FactuSOL\Domain\Model\Tax\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Tax\Tax;
use ZoiloMora\FactuSOL\Domain\ServiceName;
use ZoiloMora\System\Domain\CompanyName;

final class GetByIdQuery extends Query
{
    private const NAME = 'get_by_id';
    private const VERSION = '1';

    private Id $id;

    public static function create(int $id): self
    {
        return parent::fromPayload(
            Uuid::v4(),
            [
                'id' => $id,
            ],
        );
    }

    public static function messageName(): string
    {
        return Topic::generate(
            CompanyName::instance(),
            ServiceName::instance(),
            self::VERSION,
            self::messageType(),
            Tax::modelName(),
            self::NAME,
        );
    }

    public static function messageVersion(): string
    {
        return self::VERSION;
    }

    public function id(): Id
    {
        return $this->id;
    }

    protected function assertPayload(): void
    {
        $payload = $this->messagePayload();

        $this->id = Id::from($payload['id']);
    }
}
