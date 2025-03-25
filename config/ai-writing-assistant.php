<?php

// config for Faridmau/AiWritingAssistant
return [
    // This is default prefix for creating tables
    'tabel_prefix' => 'ai_',

    /**
     * The default language of the writing assistant.
     */
    'default_language' => 'en',
    /**
     * The default tone of the writing assistant.
     * This should be a valid tone from the WritingTone enum.
     */
    'default_tone' => \Faridmau\AiWritingAssistant\Enums\WritingTone::FORMAL->value,

    'model_policy' => [
        'category' => \Faridmau\AiWritingAssistant\Policies\CategoryPolicy::class,
        'template' => \Faridmau\AiWritingAssistant\Policies\TemplatePolicy::class,
    ],

    /**
     * If you are using a multi-tenant application, you can enable this option.
     * Make sure to set the tenant model and tenant column you are using.
     */
    'tenancy' => [
        'enabled' => true,
        'model' => \App\Models\Tenant::class, // \App\Models\Tenant::class,
        'column' => 'tenant_id',
    ],
    // 'ai_service' => [
    //     'provider' => \Faridmau\AiWritingAssistant\Services\OpenAIService::class,
    //     'api_key' => env('OPENAI_API_KEY'),
    //     'api_url' => env('OPENAI_API_URL', 'https://api.openai.com/v1/chat/completions'),
    //     'model' => env('OPENAI_MODEL', 'gpt-3.5-turbo'),
    // ],
    'ai_models' => [
        'gpt-3.5-turbo' => 'GPT-3.5 Turbo',
        'gpt-4' => 'GPT-4',
        'gpt-4-32k' => 'GPT-4 32k',
    ],
];
