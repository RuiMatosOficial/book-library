<?php
declare(strict_types = 1);

namespace App\Action;

use App\Service\Book\FindBookByUuidInterface;
use Interop\Container\ContainerInterface;

/**
 * @codeCoverageIgnore
 */
final class CheckInActionFactory
{
    public function __invoke(ContainerInterface $container) : callable
    {
        return new CheckInAction($container->get(FindBookByUuidInterface::class));
    }
}