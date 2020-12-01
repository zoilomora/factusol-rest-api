<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Invoice\GetAll;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\InvoiceRepository;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Invoices;

final class GetAllQueryHandler implements MessageHandlerInterface
{
    private InvoiceRepository $invoiceRepository;

    public function __construct(InvoiceRepository $invoiceRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
    }

    public function __invoke(GetAllQuery $query): Invoices
    {
        return $this->invoiceRepository->findAll();
    }
}
