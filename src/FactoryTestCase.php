<?php declare(strict_types=1);

namespace Easy\Test;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

abstract class FactoryTestCase extends TestCase
{
    protected ContainerInterface|MockObject $container;
    protected LoggerInterface|MockObject $logger;

    /** @var MockObject */
    protected $factory;

    protected function setUp(): void
    {
        $this->container = $this->createMock(ContainerInterface::class);
        $this->logger = $this->createMock(LoggerInterface::class);
    }
}
