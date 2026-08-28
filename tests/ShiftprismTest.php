<?php
/**
 * Tests for ShiftPrism
 */

use PHPUnit\Framework\TestCase;
use Shiftprism\Shiftprism;

class ShiftprismTest extends TestCase {
    private Shiftprism $instance;

    protected function setUp(): void {
        $this->instance = new Shiftprism(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Shiftprism::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
