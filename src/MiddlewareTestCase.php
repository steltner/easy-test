<?php declare(strict_types=1);

namespace Easy\Test;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Log\LoggerInterface;

abstract class MiddlewareTestCase extends TestCase
{
    protected ServerRequestInterface|MockObject $request;
    protected ResponseInterface|MockObject $response;
    protected RequestHandlerInterface|MockObject $handler;
    protected LoggerInterface|MockObject $logger;

    protected MiddlewareInterface $middleware;

    protected function setUp(): void
    {
        $this->request = $this->createMock(ServerRequestInterface::class);
        $this->response = $this->createMock(ResponseInterface::class);
        $this->handler = $this->createMock(RequestHandlerInterface::class);
        $this->logger = $this->createMock(LoggerInterface::class);
    }
}
