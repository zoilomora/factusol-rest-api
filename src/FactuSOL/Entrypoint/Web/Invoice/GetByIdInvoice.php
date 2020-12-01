<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Entrypoint\Web\Invoice;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;
use ZoiloMora\FactuSOL\Application\Query\Invoice\GetById\GetByIdQuery;

final class GetByIdInvoice
{
    use HandleTrait;

    public function __construct(MessageBusInterface $queryBus)
    {
        $this->messageBus = $queryBus;
    }

    public function __invoke(string $serial, int $number): Response
    {
        $result = $this->handle(
            GetByIdQuery::create($serial, $number),
        );

        return new JsonResponse(
            $result,
            null !== $result
                ? Response::HTTP_OK
                : Response::HTTP_NOT_FOUND,
        );
    }
}
