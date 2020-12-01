<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Domain\Model\Invoice;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Query\QueryBuilder;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Invoice;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\InvoiceRepository;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\Invoices;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Id;
use ZoiloMora\FactuSOL\Domain\Model\Invoice\ValueObjects\Lines;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_CFG;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_FAC;
use ZoiloMora\FactuSOL\Infrastructure\Persistence\F_LFA;

final class DbalInvoiceRepository implements InvoiceRepository
{
    private const HEADER_TABLE_NAME = F_FAC::TABLE_NAME;
    private const LINES_TABLE_NAME = F_LFA::TABLE_NAME;
    private const TAXES_TABLE_NAME = F_CFG::TABLE_NAME;
    private const TAXES_CONFIGURATION_PREFIX = 'ImpuestosIvasPrimerPeriodo';

    private Connection $connection;
    private InvoiceBuilder $invoiceBuilder;
    private LineBuilder $lineBuilder;

    public function __construct(Connection $connection, InvoiceBuilder $invoiceBuilder, LineBuilder $lineBuilder)
    {
        $this->connection = $connection;
        $this->invoiceBuilder = $invoiceBuilder;
        $this->lineBuilder = $lineBuilder;
    }

    public function findAll(): Invoices
    {
        $result = $this->getHeaderGenericQueryBuilder()->execute();

        return $this->invoicesFromArray(
            $result->fetchAllAssociative(),
        );
    }

    public function findById(Id $id): ?Invoice
    {
        $result = $this->getHeaderGenericQueryBuilder()
            ->where(F_FAC::TIPFAC . ' = :serial')
                ->andWhere(F_FAC::CODFAC . ' = :number')
            ->setParameter('serial', $id->serial(), ParameterType::STRING)
            ->setParameter('number', $id->number(), ParameterType::INTEGER)
            ->execute();

        $rows = $result->fetchAllAssociative();

        if (0 === \count($rows)) {
            return null;
        }

        return $this->invoiceFromArray($rows[0]);
    }

    private function invoicesFromArray(array $data): Invoices
    {
        $invoices = [];

        foreach ($data as $invoice) {
            $invoices[] = $this->invoiceFromArray($invoice);
        }

        return Invoices::from($invoices);
    }

    private function invoiceFromArray(array $data): Invoice
    {
        $id = new Id(
            $data[F_FAC::TIPFAC],
            (int) $data[F_FAC::CODFAC],
        );

        return $this->invoiceBuilder->fromArray(
            $data,
            $this->linesFromId($id),
        );
    }

    private function linesFromId(Id $id): ?Lines
    {
        $result = $this->getLineGenericQueryBuilder()
            ->where(F_LFA::TIPLFA . ' = :serial')
                ->andWhere(F_LFA::CODLFA . ' = :number')
            ->setParameter('serial', $id->serial(), ParameterType::STRING)
            ->setParameter('number', $id->number(), ParameterType::INTEGER)
            ->execute();

        $rows = $result->fetchAllAssociative();

        if (0 === \count($rows)) {
            return null;
        }

        return $this->linesFromData($rows);
    }

    private function linesFromData(array $data): Lines
    {
        $lines = [];

        foreach ($data as $line) {
            $line[F_LFA::IVALFA] = $this->taxPercentageFromData($line);
            $lines[] = $this->lineBuilder->fromArray($line);
        }

        return Lines::from($lines);
    }

    private function taxPercentageFromData(array $data): int
    {
        $key = (int) $data[F_LFA::IVALFA];

        if (3 === $key) {
            return 0;
        }

        $dictionary = [
            0 => self::TAXES_CONFIGURATION_PREFIX . '1',
            1 => self::TAXES_CONFIGURATION_PREFIX . '2',
            2 => self::TAXES_CONFIGURATION_PREFIX . '3',
        ];

        $result = $this->connection->createQueryBuilder()
            ->select(F_CFG::NUMCFG)
            ->from(self::TAXES_TABLE_NAME)
            ->where(F_CFG::CODCFG . ' = :key')
            ->setParameter('key', $dictionary[$key])
            ->setMaxResults(1)
            ->execute();

        return (int) $result->fetchOne();
    }

    private function getHeaderGenericQueryBuilder(): QueryBuilder
    {
        return $this->connection->createQueryBuilder()
            ->select(F_FAC::TIPFAC)
                ->addSelect(F_FAC::CODFAC)
                ->addSelect(F_FAC::REFFAC)
                ->addSelect(F_FAC::FECFAC)
                ->addSelect(F_FAC::ESTFAC)
                ->addSelect(F_FAC::ALMFAC)
                ->addSelect(F_FAC::AGEFAC)
                ->addSelect(F_FAC::CLIFAC)
                ->addSelect(F_FAC::CNOFAC)
                ->addSelect(F_FAC::CDOFAC)
                ->addSelect(F_FAC::CPOFAC)
                ->addSelect(F_FAC::CCPFAC)
                ->addSelect(F_FAC::CPRFAC)
                ->addSelect(F_FAC::CNIFAC)
                ->addSelect(F_FAC::TELFAC)
                ->addSelect(F_FAC::NET1FAC)
                ->addSelect(F_FAC::NET2FAC)
                ->addSelect(F_FAC::NET3FAC)
                ->addSelect(F_FAC::BAS1FAC)
                ->addSelect(F_FAC::BAS2FAC)
                ->addSelect(F_FAC::BAS3FAC)
                ->addSelect(F_FAC::PIVA1FAC)
                ->addSelect(F_FAC::PIVA2FAC)
                ->addSelect(F_FAC::PIVA3FAC)
                ->addSelect(F_FAC::IIVA1FAC)
                ->addSelect(F_FAC::IIVA2FAC)
                ->addSelect(F_FAC::IIVA3FAC)
                ->addSelect(F_FAC::TOTFAC)
                ->addSelect(F_FAC::FOPFAC)
                ->addSelect(F_FAC::VENFAC)
                ->addSelect(F_FAC::IMPFAC)
                ->addSelect(F_FAC::HORFAC)
                ->addSelect(F_FAC::USUFAC)
                ->addSelect(F_FAC::USMFAC)
                ->addSelect(F_FAC::CPAFAC)
                ->addSelect(F_FAC::PRTFAC)
                ->addSelect(F_FAC::CREFAC)
                ->addSelect(F_FAC::TIVA1FAC)
                ->addSelect(F_FAC::TIVA2FAC)
                ->addSelect(F_FAC::TIVA3FAC)
            ->from(self::HEADER_TABLE_NAME);
    }

    private function getLineGenericQueryBuilder(): QueryBuilder
    {
        return $this->connection->createQueryBuilder()
            ->select(F_LFA::TIPLFA)
                ->addSelect(F_LFA::CODLFA)
                ->addSelect(F_LFA::POSLFA)
                ->addSelect(F_LFA::ARTLFA)
                ->addSelect(F_LFA::DESLFA)
                ->addSelect(F_LFA::CANLFA)
                ->addSelect(F_LFA::PRELFA)
                ->addSelect(F_LFA::TOTLFA)
                ->addSelect(F_LFA::COSLFA)
                ->addSelect(F_LFA::DT1LFA)
                ->addSelect(F_LFA::IVALFA)
                ->addSelect(F_LFA::CE1LFA)
                ->addSelect(F_LFA::CE2LFA)
            ->from(self::LINES_TABLE_NAME);
    }
}
