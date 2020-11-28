<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Customer\GetAll;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Customer\CustomerRepository;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Customers;

final class GetAllQueryHandler implements MessageHandlerInterface
{
    private CustomerRepository $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function __invoke(GetAllQuery $query): Customers
    {
        return $this->customerRepository->findAll();
    }
}
