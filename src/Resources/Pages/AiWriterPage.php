<?php

namespace Faridmau\AiWritingAssistant\Resources\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Monarobase\CountryList\CountryList;
use Monarobase\CountryList\CountryListFacade;

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
                                    ->searchable()
                                    ->options(function(){
                                        $countriesArray = collect(json_decode(CountryListFacade::getList('en', 'json'), true))
                                            ->mapWithKeys(function ($value) {
                                                return [$value => $value];
                                            })
                                            ->toArray();
                                        foreach ($countriesArray as $key => $value) {
                                            $countries[$value] = $value;
                                        }
                                        return $countries;
                                    })
                                    ->required()
                                    ->placeholder(__('Select Language'))
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('language', $state);
                                    })
                            ]),
                        Section::make()
                            ->columnSpan(8)
                            ->schema([
                                RichEditor::make('description')
                            ])
                    ]),

            ])
            ->statePath('data');
    }
}
