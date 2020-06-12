<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\EventDispatcher\Event as LegacyEvent;
use Symfony\Contracts\EventDispatcher\Event as ContractsEvent;

if (class_exists(ContractsEvent::class)) {
    abstract class Event extends ContractsEvent
    {
    }
} elseif (class_exists(LegacyEvent::class)) {
    abstract class Event extends LegacyEvent
    {
    }
}
