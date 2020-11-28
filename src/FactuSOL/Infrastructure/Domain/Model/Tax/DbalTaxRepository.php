<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Tax;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Query\QueryBuilder;
use ZoiloMora\FactuSOL\Domain\Model\Tax\Tax;
use ZoiloMora\FactuSOL\Domain\Model\Tax\Taxes;
use ZoiloMora\FactuSOL\Domain\Model\Tax\TaxRepository;
use ZoiloMora\FactuSOL\Domain\Model\Tax\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Tax\ValueObject\Value;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_CFG;

final class DbalTaxRepository implements TaxRepository
{
    private const CONFIGURATION_PREFIX = 'ImpuestosIvasPrimerPeriodo';

    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findAll(): Taxes
    {
        $key = self::CONFIGURATION_PREFIX . '%';

        $result = $this->getGenericQueryBuilder()
            ->where(F_CFG::CODCFG . ' LIKE :key')
            ->setParameter('key', $key, ParameterType::STRING)
            ->execute();

        return $this->taxesFromArray(
            $result->fetchAllAssociative(),
        );
    }

    public function findById(Id $id): ?Tax
    {
        $key = self::CONFIGURATION_PREFIX . $id->value();

        $result = $this->getGenericQueryBuilder()
            ->where(F_CFG::CODCFG . ' = :key')
            ->setParameter('key', $key, ParameterType::STRING)
            ->execute();

        $rows = $result->fetchAllAssociative();

        if (0 === \count($rows)) {
            return null;
        }

        return $this->taxFromArray($rows[0]);
    }

    private function getGenericQueryBuilder(): QueryBuilder
    {
        return $this->connection->createQueryBuilder()
            ->select(F_CFG::CODCFG)
            ->addSelect(F_CFG::NUMCFG)
            ->from(F_CFG::TABLE_NAME);
    }

    private function taxesFromArray(array $data): Taxes
    {
        $taxes = [];

        foreach ($data as $tax) {
            $taxes[] = $this->taxFromArray($tax);
        }

        return Taxes::from($taxes);
    }

    private function taxFromArray(array $data): Tax
    {
        $id = \str_replace(self::CONFIGURATION_PREFIX, '', $data[F_CFG::CODCFG]);

        return new Tax(
            Id::from((int) $id),
            Value::from((int) $data[F_CFG::NUMCFG]),
        );
    }
}
