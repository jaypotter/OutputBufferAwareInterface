<?php

declare(strict_types=1);

namespace Potter\Buffer\Output\Aware;

use \Potter\Buffer\Output\OutputBufferInterface;

interface OutputBufferAwareInterface 
{
    public function getOutputBuffer(): OutputBufferInterface;
    public function hasOutputBuffer(): bool;
    public function startOutputBuffer(): void;
}