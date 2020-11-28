<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Entrypoint\Web\Customer;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use ZoiloMora\FactuSOL\Application\Query\Customer\GetAll\GetAllQuery;

final class GetAllCustomers
{
    use HandleTrait;

    public function __construct(MessageBusInterface $queryBus)
    {
        $this->messageBus = $queryBus;
    }

    public function __invoke(): Response
    {
        $result = $this->handle(
            GetAllQuery::create(),
        );

        return new JsonResponse($result);
    }
}
