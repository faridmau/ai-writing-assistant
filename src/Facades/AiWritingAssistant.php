<?php

namespace Faridmau\AiWritingAssistant\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Faridmau\AiWritingAssistant\AiWritingAssistant
 */
class AiWritingAssistant extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Faridmau\AiWritingAssistant\AiWritingAssistant::class;
    }
}
