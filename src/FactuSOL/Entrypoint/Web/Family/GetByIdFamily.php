<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Entrypoint\Web\Family;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use ZoiloMora\FactuSOL\Application\Query\Family\GetById\GetByIdQuery;

final class GetByIdFamily
{
    use HandleTrait;

    public function __construct(MessageBusInterface $queryBus)
    {
        $this->messageBus = $queryBus;
    }

    public function __invoke(string $familyId): Response
    {
        $result = $this->handle(
            GetByIdQuery::create($familyId),
        );

        return new JsonResponse(
            $result,
            null !== $result
                ? Response::HTTP_OK
                : Response::HTTP_NOT_FOUND,
        );
    }
}
