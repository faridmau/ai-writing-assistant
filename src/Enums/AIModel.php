<?php

namespace Faridmau\AiWritingAssistant\Enums;
use Filament\Support\Contracts\HasLabel;
enum AIModel: string implements HasLabel
{
    case Gpt35Turbo = 'gpt-3.5-turbo';
    case Gpt4 = 'gpt-4';
    case Gpt432k = 'gpt-4-32k';
    case Gpt4Turbo = 'gpt-4-turbo';
    case Gpt4Turbo32k = 'gpt-4-turbo-32k';
    case Gpt4Turbo16k = 'gpt-4-turbo-16k';
    case Gpt4Turbo8k = 'gpt-4-turbo-8k';
    case Gpt4Turbo4k = 'gpt-4-turbo-4k';
    case Gpt4Turbo2k = 'gpt-4-turbo-2k';
    case Gpt4Turbo1k = 'gpt-4-turbo-1k';
    case Gpt4Turbo512 = 'gpt-4-turbo-512';
    case Gpt4Turbo256 = 'gpt-4-turbo-256';
    case Gpt4Turbo128 = 'gpt-4-turbo-128';
    case Gpt4Turbo64 = 'gpt-4-turbo-64';
    case Gpt4Turbo32 = 'gpt-4-turbo-32';
    case Gpt4Turbo16 = 'gpt-4-turbo-16';
    case Gpt4Turbo8 = 'gpt-4-turbo-8';
    case Gpt4Turbo4 = 'gpt-4-turbo-4';

    public function getLabel(): string
    {
        return match ($this) {
            self::Gpt35Turbo => 'GPT-3.5 Turbo xx',
            self::Gpt4 => 'GPT-4',
            self::Gpt432k => 'GPT-4 32k',
            self::Gpt4Turbo => 'GPT-4 Turbo',
            self::Gpt4Turbo32k => 'GPT-4 Turbo 32k',
            self::Gpt4Turbo16k => 'GPT-4 Turbo 16k',
            self::Gpt4Turbo8k => 'GPT-4 Turbo 8k',
            self::Gpt4Turbo4k => 'GPT-4 Turbo 4k',
            self::Gpt4Turbo2k => 'GPT-4 Turbo 2k',
            self::Gpt4Turbo1k => 'GPT-4 Turbo 1k',
            self::Gpt4Turbo512 => 'GPT-4 Turbo 512',
            self::Gpt4Turbo256 => 'GPT-4 Turbo 256',
            self::Gpt4Turbo128 => 'GPT-4 Turbo 128',
            self::Gpt4Turbo64 => 'GPT-4 Turbo 64',
            self::Gpt4Turbo32 => 'GPT-4 Turbo 32',
            self::Gpt4Turbo16 => 'GPT-4 Turbo 16',
            self::Gpt4Turbo8 => 'GPT-4 Turbo 8',
            self::Gpt4Turbo4 => 'GPT-4 Turbo 4',
        };
    }
}
