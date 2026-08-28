<?php
/**
 * Tests for FarmEmber
 */

use PHPUnit\Framework\TestCase;
use Farmember\Farmember;

class FarmemberTest extends TestCase {
    private Farmember $instance;

    protected function setUp(): void {
        $this->instance = new Farmember(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Farmember::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
