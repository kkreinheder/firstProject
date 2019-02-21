<?php
declare(strict_types=1);

final class Bol
{
    public $bol = True;

    public function __construct(string $bol)
    {
        $this->ensureIsValidBol($bol);

        $this->bol = $bol;
    }

    public static function fromString(string $bol): self
    {
        return new self($bol);
    }

    public function __toString(): string
    {
        return $this->bol;
    }

    private function ensureIsValidBol(string $bol): void
    {
        if ($bol == false) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" bol is not true',
                    $bol
                )
            );
        }
    }
}