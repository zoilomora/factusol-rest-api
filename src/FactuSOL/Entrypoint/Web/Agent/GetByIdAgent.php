<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Entrypoint\Web\Agent;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use ZoiloMora\FactuSOL\Application\Query\Agent\GetById\GetByIdQuery;

final class GetByIdAgent
{
    use HandleTrait;

    public function __construct(MessageBusInterface $queryBus)
    {
        $this->messageBus = $queryBus;
    }

    public function __invoke(int $agentId): Response
    {
        $result = $this->handle(
            GetByIdQuery::create($agentId),
        );

        return new JsonResponse(
            $result,
            null !== $result
                ? Response::HTTP_OK
                : Response::HTTP_NOT_FOUND
        );
    }
}
