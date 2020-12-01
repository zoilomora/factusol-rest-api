<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Invoice\GetById;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Invoice;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\InvoiceRepository;

final class GetByIdQueryHandler implements MessageHandlerInterface
{
    private InvoiceRepository $invoiceRepository;

    public function __construct(InvoiceRepository $invoiceRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
    }

    public function __invoke(GetByIdQuery $query): ?Invoice
    {
        return $this->invoiceRepository->findById(
            $query->id(),
        );
    }
}
