<?php

declare(strict_types=1);

namespace Reconmap\Controllers\Commands;

use League\Route\RouteCollectionInterface;

class CommandsRouter
{
    public function mapRoutes(RouteCollectionInterface $router): void
    {
        $router->map('GET', '/commands/{commandId:number}', GetCommandController::class);
        $router->map('GET', '/commands/outputs', GetCommandOutputsController::class);
        $router->map('DELETE', '/commands/outputs/{outputId:number}', DeleteCommandOutputController::class);
        $router->map('POST', '/commands/outputs', UploadCommandOutputController::class);
    }
}
