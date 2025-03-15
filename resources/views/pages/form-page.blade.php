<x-filament-panels::page>
    <form wire:submit="submit">
        <div class="mb-4">
            {{ $this->form }}
        </div>
        <x-filament::button wire:click="submit" class="mt-4 cols-4">
            {{ __('Submit') }}
        </x-filament::button>
    </form>

    <x-filament-actions::modals />
</x-filament-panels::page>
