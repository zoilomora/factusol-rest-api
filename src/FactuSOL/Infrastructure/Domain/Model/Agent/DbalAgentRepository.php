<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Agent;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Query\QueryBuilder;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Agent;
use ZoiloMora\FactuSOL\Domain\Model\Agent\AgentRepository;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Agents;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Id;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_AGE;

final class DbalAgentRepository implements AgentRepository
{
    private const AGENT_TABLE_NAME = F_AGE::TABLE_NAME;

    private Connection $connection;
    private AgentBuilder $agentBuilder;

    public function __construct(Connection $connection, AgentBuilder $agentBuilder)
    {
        $this->connection = $connection;
        $this->agentBuilder = $agentBuilder;
    }

    public function findAll(): Agents
    {
        $result = $this->getGenericQueryBuilder()
            ->execute();

        return $this->agentsFromArray(
            $result->fetchAllAssociative(),
        );
    }

    public function findById(Id $id): ?Agent
    {
        $result = $this->getGenericQueryBuilder()
            ->where(F_AGE::CODAGE . ' = :id')
            ->setParameter('id', $id->value(), ParameterType::INTEGER)
            ->execute();

        $rows = $result->fetchAllAssociative();

        if (0 === \count($rows)) {
            return null;
        }

        return $this->agentBuilder->fromArray($rows[0]);
    }

    private function agentsFromArray(array $data): Agents
    {
        $agents = [];

        foreach ($data as $agent) {
            $agents[] = $this->agentBuilder->fromArray($agent);
        }

        return Agents::from($agents);
    }

    private function getGenericQueryBuilder(): QueryBuilder
    {
        return $this->connection->createQueryBuilder()
            ->select(F_AGE::CODAGE)
                ->addSelect(F_AGE::NOMAGE)
                ->addSelect(F_AGE::DNIAGE)
                ->addSelect(F_AGE::TEMAGE)
                ->addSelect(F_AGE::TEPAGE)
                ->addSelect(F_AGE::EMAAGE)
                ->addSelect(F_AGE::DOMAGE)
                ->addSelect(F_AGE::PROAGE)
                ->addSelect(F_AGE::POBAGE)
                ->addSelect(F_AGE::PAIAGE)
                ->addSelect(F_AGE::CPOAGE)
                ->addSelect(F_AGE::COMAGE)
            ->from(self::AGENT_TABLE_NAME);
    }
}
