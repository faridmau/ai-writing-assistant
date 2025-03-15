<?php

namespace Faridmau\AiWritingAssistant\Resources\Pages;

use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use PeterColes\Languages\LanguagesFacade;
use Faridmau\AiWritingAssistant\Enums\AIModel;
use Filament\Forms\Concerns\InteractsWithForms;
use Faridmau\AiWritingAssistant\Enums\WritingTone;
use Filament\Notifications\Notification;
class AiWriterPage extends Page implements HasForms
{

    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Ai Assistant';
    protected static string $view = 'ai-writing-assistant::pages.form-page';

    protected string $labelIds = 'Writer';
    protected static ?string $title = 'Writer Assistant';
    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }
    public function submit(): void
    {
        $data = $this->form->getState();

        $existingContent = $data['content'];
        $this->data['content'] = $existingContent . '\n' ;
        // $this->notify('success', 'Form submitted successfully!');

        Notification::make()
            ->success()
            ->title('Content Generated Successfully')
            ->body('The AI-generated content has been added to the field.')
            ->send();
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(['default' => 12])
                    ->schema([
                        Section::make()
                            ->columnSpan(4)
                            ->schema([
                                Select::make(__('Language'))
                                    ->label(__('Language'))
                                    ->default(config('ai-writing-assistant.default_language'))
                                    ->searchable()
                                    ->options(LanguagesFacade::lookup()->all())
                                    ->required()
                                    ->placeholder(__('Select Language'))
                                    ->reactive(),
                                Textarea::make('prompt')
                                    ->required(),
                                Select::make('model')
                                    ->required()
                                    ->label(__('AI Model'))
                                    ->searchable()
                                    ->options(AIModel::class),
                                Select::make('narative_tone')
                                    ->label(__('Narrative Tone'))
                                    ->default(config('ai-writing-assistant.default_tone'))
                                    ->required()
                                    ->placeholder(__('Select Tone'))
                                    ->reactive()
                                    ->searchable()
                                    ->options(WritingTone::class)
                            ]),
                        Section::make()
                            ->columnSpan(8)
                            ->schema([
                                RichEditor::make('content')
                                    ->label(__('Content'))
                                    ->columnSpan(12),
                            ])
                    ]),

            ])
            ->statePath('data');
    }
}
