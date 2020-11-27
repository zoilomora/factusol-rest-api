<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Application\Query\Agent\GetAll;

use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use ZoiloMora\FactuSOL\Domain\Model\Agent\AgentRepository;
use ZoiloMora\FactuSOL\Domain\Model\Agent\Agents;

final class GetAllQueryHandler implements MessageHandlerInterface
{
    private AgentRepository $agentRepository;

    public function __construct(AgentRepository $agentRepository)
    {
        $this->agentRepository = $agentRepository;
    }

    public function __invoke(GetAllQuery $query): Agents
    {
        return $this->agentRepository->findAll();
    }
}
