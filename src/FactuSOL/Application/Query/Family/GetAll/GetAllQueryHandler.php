<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Family\GetAll;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Family\Families;
use ZoiloMora\FactuSOL\Domain\Model\Family\FamilyRepository;

final class GetAllQueryHandler implements MessageHandlerInterface
{
    private FamilyRepository $familyRepository;

    public function __construct(FamilyRepository $familyRepository)
    {
        $this->familyRepository = $familyRepository;
    }

    public function __invoke(GetAllQuery $query): Families
    {
        return $this->familyRepository->findAll();
    }
}
