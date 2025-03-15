<?php

namespace Faridmau\AiWritingAssistant\Enums;

use Filament\Support\Contracts\HasLabel;

enum WritingTone: string implements HasLabel
{
    case FORMAL = 'formal';
    case INFORMAL = 'informal';
    case FRIENDLY = 'friendly';
    case PROFESSIONAL = 'professional';
    case PERSUASIVE = 'persuasive';
    case HUMOROUS = 'humorous';
    case SARCASTIC = 'sarcastic';
    case OPTIMISTIC = 'optimistic';
    case PESSIMISTIC = 'pessimistic';
    case NEUTRAL = 'neutral';
    case EMPATHETIC = 'empathetic';
    case SYMPATHETIC = 'sympathetic';
    case AUTHORITATIVE = 'authoritative';
    case CONVERSATIONAL = 'conversational';
    case CONSCIENTIOUS = 'conscientious';
    case ASSERTIVE = 'assertive';
    case CARING = 'caring';
    case CYNICAL = 'cynical';
    case ENTHUSIASTIC = 'enthusiastic';
    case EXCITED = 'excited';
    case HOPEFUL = 'hopeful';
    case INSPIRING = 'inspiring';
    case MOTIVATIONAL = 'motivational';
    case PASSIONATE = 'passionate';
    case REFLECTIVE = 'reflective';
    case THOUGHTFUL = 'thoughtful';
    case SINCERE = 'sincere';
    case TRUSTWORTHY = 'trustworthy';
    case RELIABLE = 'reliable';
    case DEPENDABLE = 'dependable';
    case LOYAL = 'loyal';
    case HONEST = 'honest';
    case TRANSPARENT = 'transparent';
    case AUTHENTIC = 'authentic';
    case GENUINE = 'genuine';
    case HUMBLE = 'humble';
    case MODEST = 'modest';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::FORMAL => 'Formal',
            self::INFORMAL => 'Informal',
            self::FRIENDLY => 'Friendly',
            self::PROFESSIONAL => 'Professional',
            self::PERSUASIVE => 'Persuasive',
            self::HUMOROUS => 'Humorous',
            self::SARCASTIC => 'Sarcastic',
            self::OPTIMISTIC => 'Optimistic',
            self::PESSIMISTIC => 'Pessimistic',
            self::NEUTRAL => 'Neutral',
            self::EMPATHETIC => 'Empathetic',
            self::SYMPATHETIC => 'Sympathetic',
            self::AUTHORITATIVE => 'Authoritative',
            self::CONVERSATIONAL => 'Conversational',
            self::CONSCIENTIOUS => 'Conscientious',
            self::ASSERTIVE => 'Assertive',
            self::CARING => 'Caring',
            self::CYNICAL => 'Cynical',
            self::ENTHUSIASTIC => 'Enthusiastic',
            self::EXCITED => 'Excited',
            self::HOPEFUL => 'Hopeful',
            self::INSPIRING => 'Inspiring',
            self::MOTIVATIONAL => 'Motivational',
            self::PASSIONATE => 'Passionate',
            self::REFLECTIVE => 'Reflective',
            self::THOUGHTFUL => 'Thoughtful',
            self::SINCERE => 'Sincere',
            self::TRUSTWORTHY => 'Trustworthy',
            self::RELIABLE => 'Reliable',
            self::DEPENDABLE => 'Dependable',
            self::LOYAL => 'Loyal',
            self::HONEST => 'Honest',
            self::TRANSPARENT => 'Transparent',
            self::AUTHENTIC => 'Authentic',
            self::GENUINE => 'Genuine',
            self::HUMBLE => 'Humble',
            self::MODEST => 'Modest',
        };
    }
}
