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
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_CFG;

final class DbalTaxRepository implements TaxRepository
{
    private const TAX_TABLE_NAME = F_CFG::TABLE_NAME;
    private const CONFIGURATION_PREFIX = 'ImpuestosIvasPrimerPeriodo';

    private Connection $connection;
    private TaxBuilder $taxBuilder;

    public function __construct(Connection $connection, TaxBuilder $taxBuilder)
    {
        $this->connection = $connection;
        $this->taxBuilder = $taxBuilder;
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

        return $this->taxBuilder->fromArray($rows[0]);
    }

    private function getGenericQueryBuilder(): QueryBuilder
    {
        return $this->connection->createQueryBuilder()
            ->select(F_CFG::CODCFG)
            ->addSelect(F_CFG::NUMCFG)
            ->from(self::TAX_TABLE_NAME);
    }

    private function taxesFromArray(array $data): Taxes
    {
        $taxes = [];

        foreach ($data as $tax) {
            $taxes[] = $this->taxBuilder->fromArray($tax);
        }

        return Taxes::from($taxes);
    }
}
