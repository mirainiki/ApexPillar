<?php
/**
 * Tests for ApexPillar
 */

use PHPUnit\Framework\TestCase;
use Apexpillar\Apexpillar;

class ApexpillarTest extends TestCase {
    private Apexpillar $instance;

    protected function setUp(): void {
        $this->instance = new Apexpillar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apexpillar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
