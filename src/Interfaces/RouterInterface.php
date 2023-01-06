<?php
namespace Pavelas\OopTest\Interfaces;

interface RouterInterface
{
    public function process(string $url, string $method);
}