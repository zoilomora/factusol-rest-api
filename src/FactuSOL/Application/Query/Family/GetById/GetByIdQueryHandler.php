<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Family\GetById;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Family\Family;
use ZoiloMora\FactuSOL\Domain\Model\Family\FamilyRepository;

final class GetByIdQueryHandler implements MessageHandlerInterface
{
    private FamilyRepository $familyRepository;

    public function __construct(FamilyRepository $familyRepository)
    {
        $this->familyRepository = $familyRepository;
    }

    public function __invoke(GetByIdQuery $query): ?Family
    {
        return $this->familyRepository->findById(
            $query->id(),
        );
    }
}
