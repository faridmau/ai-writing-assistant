<?php

namespace Faridmau\AiWritingAssistant\Commands;

use Illuminate\Console\Command;

class AiWritingAssistantCommand extends Command
{
    public $signature = 'ai-writing-assistant';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
