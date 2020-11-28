<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Family;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Query\QueryBuilder;
use ZoiloMora\FactuSOL\Domain\Model\Family\Families;
use ZoiloMora\FactuSOL\Domain\Model\Family\Family;
use ZoiloMora\FactuSOL\Domain\Model\Family\FamilyRepository;
use ZoiloMora\FactuSOL\Domain\Model\Family\ValueObject\Description;
use ZoiloMora\FactuSOL\Domain\Model\Family\ValueObject\Id;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_FAM;

final class DbalFamilyRepository implements FamilyRepository
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findAll(): Families
    {
        $result = $this->getGenericQueryBuilder()
            ->execute();

        return $this->familiesFromArray(
            $result->fetchAllAssociative(),
        );
    }

    public function findById(Id $id): ?Family
    {
        $result = $this->getGenericQueryBuilder()
            ->where(F_FAM::CODFAM . ' = :id')
            ->setParameter('id', $id->value(), ParameterType::INTEGER)
            ->execute();

        $rows = $result->fetchAllAssociative();

        if (0 === \count($rows)) {
            return null;
        }

        return $this->familyFromArray($rows[0]);
    }

    private function getGenericQueryBuilder(): QueryBuilder
    {
        return $this->connection->createQueryBuilder()
            ->select(F_FAM::CODFAM)
                ->addSelect(F_FAM::DESFAM)
            ->from(F_FAM::TABLE_NAME);
    }

    private function familiesFromArray(array $data): Families
    {
        $families = [];

        foreach ($data as $family) {
            $families[] = $this->familyFromArray($family);
        }

        return Families::from($families);
    }

    private function familyFromArray(array $data): Family
    {
        return new Family(
            Id::from($data[F_FAM::CODFAM]),
            Description::from($data[F_FAM::DESFAM]),
        );
    }
}
