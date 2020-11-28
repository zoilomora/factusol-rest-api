<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Entrypoint\Web\Tax;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use ZoiloMora\FactuSOL\Application\Query\Tax\GetAll\GetAllQuery;

final class GetAllTaxes
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
