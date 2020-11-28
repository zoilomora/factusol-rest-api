<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Entrypoint\Web\Tax;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use ZoiloMora\FactuSOL\Application\Query\Tax\GetById\GetByIdQuery;

final class GetByIdTax
{
    use HandleTrait;

    public function __construct(MessageBusInterface $queryBus)
    {
        $this->messageBus = $queryBus;
    }

    public function __invoke(int $taxId): Response
    {
        $result = $this->handle(
            GetByIdQuery::create($taxId),
        );

        return new JsonResponse(
            $result,
            null !== $result
                ? Response::HTTP_OK
                : Response::HTTP_NOT_FOUND,
        );
    }
}
