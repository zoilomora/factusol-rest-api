<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Tax\GetById;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Tax\Tax;
use ZoiloMora\FactuSOL\Domain\Model\Tax\TaxRepository;

final class GetByIdQueryHandler implements MessageHandlerInterface
{
    private TaxRepository $taxRepository;

    public function __construct(TaxRepository $taxRepository)
    {
        $this->taxRepository = $taxRepository;
    }

    public function __invoke(GetByIdQuery $query): ?Tax
    {
        return $this->taxRepository->findById(
            $query->id()
        );
    }
}
