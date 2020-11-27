<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Entrypoint\Console;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver\ResultStatement;
use Doctrine\DBAL\Schema\Table;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use ZoiloMora\FactuSOL\Infrastructure\VersionChecker;

final class TableMapperCommand extends Command
{
    private const EOF = "\n";
    private const OUTPUT_DIRECTORY = 'src/FactuSOL/Infrastructure/Persistence/';
    private const OUTPUT_NAMESPACE = 'ZoiloMora\FactuSOL\Infrastructure\Persistence';

    private Connection $connection;
    private VersionChecker $versionChecker;

    public function __construct(Connection $connection, VersionChecker $versionChecker)
    {
        parent::__construct(null);

        $this->connection = $connection;
        $this->versionChecker = $versionChecker;
    }

    protected function configure()
    {
        $this
            ->setName('factusol:table_mapper')
            ->setDescription('Generates static files with constants to facilitate the use of FactuSOL tables');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->connection->connect();

        $this->assertDatabaseCompatibility();

        $this->saveDatabaseVersion(
            $this->getVersionNumberOfDatabase(),
        );

        $schemaManager = $this->connection->getSchemaManager();

        $output->writeln('Generating table mapping...');
        $tables = $schemaManager->listTables();

        $progressBar = new ProgressBar($output, \count($tables));
        $progressBar->start();

        foreach ($tables as $table) {
            $content = $this->generateContentFile($table);
            \file_put_contents(self::OUTPUT_DIRECTORY . $table->getName() . '.php', $content);
            $progressBar->advance();
        }

        $progressBar->finish();

        return 0;
    }

    private function generateContentFile(Table $table): string
    {
        $content = '<?php' . self::EOF;
        $content .= 'declare(strict_types=1);' . self::EOF . self::EOF;
        $content .= 'namespace ' . self::OUTPUT_NAMESPACE . ';' . self::EOF . self::EOF;
        $content .= 'final class ' . $table->getName() . self::EOF . '{' . self::EOF;

        $content .= \sprintf(
            "    public const TABLE_NAME = '%s';%s%s",
            $table->getName(),
            self::EOF,
            self::EOF,
        );

        foreach ($table->getColumns() as $column) {
            if (null !== $column->getComment()) {
                $content .= \sprintf(
                    '    /** @var string %s */%s',
                    \str_replace(["\n", "\r"], [' '], $column->getComment()),
                    self::EOF,
                );
            }

            $content .= \sprintf(
                "    public const %s = '%s';%s",
                $column->getName(),
                $column->getName(),
                self::EOF,
            );

            $content .= self::EOF;
        }

        $content = \substr($content, 0, -1);

        return $content . '}' . self::EOF;
    }

    private function assertDatabaseCompatibility(): void
    {
        $version = $this->getVersionNumberOfDatabase();

        if (true === $this->versionChecker->isValid($version)) {
            return;
        }

        throw new \Exception('The database version is not supported.');
    }

    private function saveDatabaseVersion(int $version): void
    {
        \file_put_contents(
            './config/context/factusol/table_mapper.yaml',
            \sprintf("parameters:\n  factusol.db_version: %d\n", $version),
        );
    }

    private function getVersionNumberOfDatabase(): int
    {
        $result = $this->connection->createQueryBuilder()
            ->select('CODVER')
            ->from('F_VER')
            ->setMaxResults(1)
            ->execute();

        \assert($result instanceof ResultStatement);

        return (int) $result->fetchOne();
    }
}
