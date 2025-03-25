<?php

namespace Faridmau\AiWritingAssistant;

use Filament\Panel;
use Filament\Contracts\Plugin;
use Faridmau\AiWritingAssistant\Resources\Pages\AiWriterPage;

class AiWritingAssistantPlugin implements Plugin
{
    public function getId(): string
    {
        return 'ai-writing-assistant';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                AiWriterPage::class,
            ]);
    }

    public function boot(Panel $panel): void {}

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
