<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Customer\GetById;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Customer\Customer;
use ZoiloMora\FactuSOL\Domain\Model\Customer\CustomerRepository;

final class GetByIdQueryHandler implements MessageHandlerInterface
{
    private CustomerRepository $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function __invoke(GetByIdQuery $query): ?Customer
    {
        return $this->customerRepository->findById(
            $query->id(),
        );
    }
}
