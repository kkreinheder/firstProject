<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class TrueTest extends TestCase
{
    public function testCanBeCreatedFromValidBol(): void
    {
        $this->assertInstanceOf(
            Bol::class,
            Bol::fromString('True')
        );
    }

    public function testCannotBeCreatedFromInvalidBol(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Bol::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'True',
            Bol::fromString('True')
        );
    }
}