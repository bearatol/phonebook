<?php

use PHPUnit\Framework\TestCase;
use Model\Main;

class MainTest extends TestCase
{
    private $main;

    protected function setUp(): void
    {
        $this->main = new Main;
    }

    protected function tearDown(): void
    {
        
    }
}
