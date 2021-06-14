<?php

declare(strict_types=1);

namespace EasyWeChat\OfficialAccount\Contracts;

use EasyWeChat\Kernel\Decorators\FinallyResult;
use EasyWeChat\Kernel\Decorators\TerminateResult;

interface Handler
{
    public function handle(Message $message): bool | FinallyResult | TerminateResult;
}