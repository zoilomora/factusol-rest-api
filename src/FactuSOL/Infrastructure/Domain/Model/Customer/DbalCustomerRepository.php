<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Customer;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Customer;
use ZoiloMora\FactuSOL\Domain\Model\Customer\CustomerRepository;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Customers;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\Id;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_CLI;

final class DbalCustomerRepository implements CustomerRepository
{
    private const CUSTOMER_TABLE_NAME = F_CLI::TABLE_NAME;

    private Connection $connection;
    private CustomerBuilder $customerBuilder;

    public function __construct(Connection $connection, CustomerBuilder $customerBuilder)
    {
        $this->connection = $connection;
        $this->customerBuilder = $customerBuilder;
    }

    public function findAll(): Customers
    {
        $result = $this->getGenericQueryBuilder()
            ->execute();

        return $this->customersFromArray(
            $result->fetchAllAssociative(),
        );
    }

    public function findById(Id $id): ?Customer
    {
        $result = $this->getGenericQueryBuilder()
            ->where(F_CLI::CODCLI . ' = :id')
            ->setParameter('id', $id->value())
            ->execute();

        $rows = $result->fetchAllAssociative();

        if (0 === \count($rows)) {
            return null;
        }

        return $this->customerBuilder->fromArray($rows[0]);
    }

    private function customersFromArray(array $data): Customers
    {
        $customers = [];

        foreach ($data as $customer) {
            $customers[] = $this->customerBuilder->fromArray($customer);
        }

        return Customers::from($customers);
    }

    private function getGenericQueryBuilder(): QueryBuilder
    {
        return $this->connection->createQueryBuilder()
            ->select(F_CLI::CODCLI)
                ->addSelect(F_CLI::NOFCLI)
                ->addSelect(F_CLI::NIFCLI)
                ->addSelect(F_CLI::TELCLI)
                ->addSelect(F_CLI::EMACLI)
                ->addSelect(F_CLI::DOMCLI)
                ->addSelect(F_CLI::PROCLI)
                ->addSelect(F_CLI::POBCLI)
                ->addSelect(F_CLI::PAICLI)
                ->addSelect(F_CLI::CPOCLI)
            ->from(self::CUSTOMER_TABLE_NAME);
    }
}
