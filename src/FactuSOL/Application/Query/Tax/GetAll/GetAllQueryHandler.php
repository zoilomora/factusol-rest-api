<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Tax\GetAll;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Tax\Taxes;
use ZoiloMora\FactuSOL\Domain\Model\Tax\TaxRepository;

final class GetAllQueryHandler implements MessageHandlerInterface
{
    private TaxRepository $taxRepository;

    public function __construct(TaxRepository $taxRepository)
    {
        $this->taxRepository = $taxRepository;
    }

    public function __invoke(GetAllQuery $query): Taxes
    {
        return $this->taxRepository->findAll();
    }
}
