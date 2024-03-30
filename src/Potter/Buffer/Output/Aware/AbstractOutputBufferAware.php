<?php

declare(strict_types=1);

namespace Potter\Buffer\Output\Aware;

use \Potter\Buffer\Output\OutputBufferInterface;

abstract class AbstractOutputBufferAware implements OutputBufferAwareInterface
{
    abstract public function getOutputBuffer(): OutputBufferInterface;
    abstract public function hasOutputBuffer(): bool;
    abstract public function startOutputBuffer(): void;
}