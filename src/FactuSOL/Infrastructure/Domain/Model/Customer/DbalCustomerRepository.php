<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Customer;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Customer;
use ZoiloMora\FactuSOL\Domain\Model\Customer\CustomerRepository;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Customers;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\Address;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\City;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\Country;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\State;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\Street;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Address\ValueObject\ZipCode;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\Contact;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\ValueObject\Email;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\ValueObject\PersonalPhone;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Model\Contact\ValueObject\WorkPhone;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\FiscalName;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\Id;
use ZoiloMora\FactuSOL\Domain\Model\Customer\ValueObject\IdentityDocument;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_CLI;

final class DbalCustomerRepository implements CustomerRepository
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
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

        return $this->customerFromArray($rows[0]);
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
            ->from(F_CLI::TABLE_NAME);
    }

    private function customersFromArray(array $data): Customers
    {
        $customers = [];

        foreach ($data as $customer) {
            $customers[] = $this->customerFromArray($customer);
        }

        return Customers::from($customers);
    }

    private function customerFromArray(array $data): Customer
    {
        return new Customer(
            Id::from((int) $data[F_CLI::CODCLI]),
            IdentityDocument::from($data[F_CLI::NIFCLI]),
            FiscalName::from($data[F_CLI::NOFCLI]),
            $this->contactFromArray($data),
            $this->addressFromArray($data),
        );
    }

    private function contactFromArray(array $data): Contact
    {
        return new Contact(
            WorkPhone::from($data[F_CLI::TELCLI]),
            PersonalPhone::from(''),
            Email::from($data[F_CLI::EMACLI]),
        );
    }

    private function addressFromArray(array $data): Address
    {
        return new Address(
            Street::from($data[F_CLI::DOMCLI]),
            City::from($data[F_CLI::POBCLI]),
            State::from($data[F_CLI::PROCLI]),
            Country::from($data[F_CLI::PAICLI]),
            ZipCode::from($data[F_CLI::CPOCLI]),
        );
    }
}
