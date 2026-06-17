<?php
/**
 * Tests for NodePrime
 */

use PHPUnit\Framework\TestCase;
use Nodeprime\Nodeprime;

class NodeprimeTest extends TestCase {
    private Nodeprime $instance;

    protected function setUp(): void {
        $this->instance = new Nodeprime(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodeprime::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
