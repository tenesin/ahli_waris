<div class="px-2 py-12 sm:px-4 w-full">
    <h1 class="fi-simple-header-heading text-2xl font-bold tracking-tight text-gray-950 dark:text-white my-2">
        {{ __('ahli-waris.pages.auth.login.heading') }}
    </h1>

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_BEFORE, scopes: $this->getRenderHookScopes()) }}

    <img src="{{ asset('images/auth.title.png') }}" class="mb-8 w-80" alt="Ahli Waris Logo" srcset="">

    <x-filament-panels::form wire:submit="authenticate">
        {{ $this->form }}

        <x-filament-panels::form.actions :actions="$this->getCachedFormActions()" :full-width="$this->hasFullWidthFormActions()" />
    </x-filament-panels::form>

    @if (filament()->hasRegistration())
        <p class="flex justify-center">
            <span>{{ __('ahli-waris.pages.auth.login.actions.register.before') }}
                {{ $this->registerAction }}</span>
        </p>
    @endif

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_AFTER, scopes: $this->getRenderHookScopes()) }}
</div>
