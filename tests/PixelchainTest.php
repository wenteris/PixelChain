<?php
/**
 * Tests for PixelChain
 */

use PHPUnit\Framework\TestCase;
use Pixelchain\Pixelchain;

class PixelchainTest extends TestCase {
    private Pixelchain $instance;

    protected function setUp(): void {
        $this->instance = new Pixelchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixelchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
