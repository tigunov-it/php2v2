<?php
namespace Test;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testItWorks(): void
    {
        // Проверяем, что true – это true
        $this->assertTrue(true);
    }
}