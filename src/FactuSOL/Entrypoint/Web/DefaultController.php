<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Entrypoint\Web;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class DefaultController
{
    public function index(): Response
    {
        return new JsonResponse(
            [
                'service' => 'FactuSOL REST API',
                'url' => 'https://github.com/zoilomora/factusol-rest-api',
            ],
        );
    }
}
