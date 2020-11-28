<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Agent\GetById;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Agent;
use ZoiloMora\FactuSOL\Domain\Model\Agent\AgentRepository;

final class GetByIdQueryHandler implements MessageHandlerInterface
{
    private AgentRepository $agentRepository;

    public function __construct(AgentRepository $agentRepository)
    {
        $this->agentRepository = $agentRepository;
    }

    public function __invoke(GetByIdQuery $query): ?Agent
    {
        return $this->agentRepository->findById(
            $query->id(),
        );
    }
}
