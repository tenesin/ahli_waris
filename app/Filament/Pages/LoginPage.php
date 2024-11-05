<?php

namespace App\Filament\Pages;

use Filament\Pages\Auth\Login;
use Filament\Actions\Action;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;

class LoginPage extends Login
{
    protected static string $layout = 'filament.components.layout.auth';
    protected static string $view = 'filament.pages.login-page';

    protected ?string $maxWidth = '3xl';

    public function registerAction(): Action
    {
        return Action::make('register')
            ->link()
            ->label('Daftar Disini')
            ->url(filament()->getRegistrationUrl());
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label('Email Address')
            ->email()
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label('Password')
            ->hint(filament()->hasPasswordReset() ? new HtmlString(Blade::render('<x-filament::link :href="filament()->getRequestPasswordResetUrl()">Reset Password</x-filament::link>')) : null)
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->autocomplete('current-password')
            ->required()
            ->extraInputAttributes(['tabindex' => 2]);
    }

    protected function getRememberFormComponent(): Component
    {
        return Checkbox::make('remember')
            ->label('Remember Me');
    }

    public function getTitle(): string | Htmlable
    {
        return 'Login to Your Account';
    }

    public function getHeading(): string | Htmlable
    {
        return 'Welcome Back';
    }

    protected function getAuthenticateFormAction(): Action
    {
        return Action::make('authenticate')
            ->label('Sign In')
            ->submit('authenticate');
    }
}
