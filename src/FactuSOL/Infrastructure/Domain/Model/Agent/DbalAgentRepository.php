<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Agent;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Query\QueryBuilder;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Agent;
use ZoiloMora\FactuSOL\Domain\Model\Agent\AgentRepository;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Agents;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\Address;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\City;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\Country;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\State;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\Street;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Address\ValueObject\ZipCode;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Contact\Contact;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Contact\ValueObject\Email;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Contact\ValueObject\PersonalPhone;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Model\Contact\ValueObject\WorkPhone;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Commission;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\IdentityDocument;
use ZoiloMora\FactuSOL\Domain\Model\Agent\ValueObject\Name;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_AGE;

final class DbalAgentRepository implements AgentRepository
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
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

        return $this->agentFromArray($rows[0]);
    }

    private function agentsFromArray(array $data): Agents
    {
        $agents = [];

        foreach ($data as $agent) {
            $agents[] = $this->agentFromArray($agent);
        }

        return Agents::from($agents);
    }

    private function agentFromArray(array $data): Agent
    {
        return new Agent(
            Id::from((int) $data[F_AGE::CODAGE]),
            Name::from($data[F_AGE::NOMAGE]),
            IdentityDocument::from($data[F_AGE::DNIAGE]),
            $this->contactFromArray($data),
            $this->addressFromArray($data),
            Commission::from((float) $data[F_AGE::COMAGE]),
        );
    }

    private function contactFromArray(array $data): Contact
    {
        return new Contact(
            WorkPhone::from($data[F_AGE::TEMAGE]),
            PersonalPhone::from($data[F_AGE::TEPAGE]),
            Email::from($data[F_AGE::EMAAGE]),
        );
    }

    private function addressFromArray(array $data): Address
    {
        return new Address(
            Street::from($data[F_AGE::DOMAGE]),
            City::from($data[F_AGE::PROAGE]),
            State::from($data[F_AGE::POBAGE]),
            Country::from($data[F_AGE::PAIAGE]),
            ZipCode::from($data[F_AGE::CPOAGE]),
        );
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
            ->from(F_AGE::TABLE_NAME);
    }
}
