<?php
/**
 * Tests for SolidityFathom
 */

use PHPUnit\Framework\TestCase;
use Solidityfathom\Solidityfathom;

class SolidityfathomTest extends TestCase {
    private Solidityfathom $instance;

    protected function setUp(): void {
        $this->instance = new Solidityfathom(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityfathom::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
