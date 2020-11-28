<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Entrypoint\Web\Customer;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use ZoiloMora\FactuSOL\Application\Query\Customer\GetById\GetByIdQuery;

final class GetByIdCustomer
{
    use HandleTrait;

    public function __construct(MessageBusInterface $queryBus)
    {
        $this->messageBus = $queryBus;
    }

    public function __invoke(int $customerId): Response
    {
        $result = $this->handle(
            GetByIdQuery::create($customerId),
        );

        return new JsonResponse(
            $result,
            null !== $result
                ? Response::HTTP_OK
                : Response::HTTP_NOT_FOUND
        );
    }
}
