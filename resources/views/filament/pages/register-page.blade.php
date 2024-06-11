<div class="px-2 py-12 sm:px-4 w-full">
    <h1 class="fi-simple-header-heading text-2xl font-bold tracking-tight text-gray-950 dark:text-white my-2">
        {{ __('ahli-waris.pages.auth.register.heading') }}
    </h1>

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_BEFORE, scopes: $this->getRenderHookScopes()) }}

    <img src="{{ asset('images/auth.title.png') }}" class="mb-8 w-80" alt="Ahli Waris Logo" srcset="">

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_REGISTER_FORM_BEFORE, scopes: $this->getRenderHookScopes()) }}

    <x-filament-panels::form wire:submit="register">
        {{ $this->form }}

        <x-filament-panels::form.actions :actions="$this->getCachedFormActions()" :full-width="$this->hasFullWidthFormActions()" />
    </x-filament-panels::form>


    @if (filament()->hasLogin())
        <p class="flex justify-center">
            <span>{{ __('ahli-waris.pages.auth.register.actions.login.before') }}
                {{ $this->loginAction }}</span>
        </p>
    @endif

    {{ \Filament\Support\Facades\FilamentView::renderHook(\Filament\View\PanelsRenderHook::AUTH_REGISTER_FORM_AFTER, scopes: $this->getRenderHookScopes()) }}
</div>
