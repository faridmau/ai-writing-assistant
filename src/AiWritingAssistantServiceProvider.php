<?php

namespace Faridmau\AiWritingAssistant;

use Faridmau\AiWritingAssistant\Commands\AiWritingAssistantCommand;
use Faridmau\AiWritingAssistant\Testing\TestsAiWritingAssistant;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AiWritingAssistantServiceProvider extends PackageServiceProvider
{
    public static string $name = 'ai-writing-assistant';

    public static string $viewNamespace = 'ai-writing-assistant';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('faridmau/ai-writing-assistant');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        // Icon Registration
        FilamentIcon::register($this->getIcons());

        // Handle Stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/ai-writing-assistant/{$file->getFilename()}"),
                ], 'ai-writing-assistant-stubs');
            }
        }

        // Testing
        Testable::mixin(new TestsAiWritingAssistant);
    }

    protected function getAssetPackageName(): ?string
    {
        return 'faridmau/ai-writing-assistant';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('ai-writing-assistant', __DIR__ . '/../resources/dist/components/ai-writing-assistant.js'),
            // Css::make('ai-writing-assistant-styles', __DIR__ . '/../resources/dist/ai-writing-assistant.css'),
            // Js::make('ai-writing-assistant-scripts', __DIR__ . '/../resources/dist/ai-writing-assistant.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
            AiWritingAssistantCommand::class,
        ];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            // 'create_ai-writing-assistant_table',
            'create_categories_table',
            'create_templates_table',
        ];
    }
}
