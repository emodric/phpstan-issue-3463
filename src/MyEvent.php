<?php

declare(strict_types=1);

namespace App;

final class MyEvent extends Event
{
    /**
     * @var string
     */
    private $foo;

    public function __construct(string $foo)
    {
        $this->foo = $foo;
    }

    public function getFoo(): string
    {
        return $this->foo;
    }
}
