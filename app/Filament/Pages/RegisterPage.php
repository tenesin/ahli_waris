<?php

namespace App\Filament\Pages;

use Filament\Pages\Auth\Register;
use Filament\Actions\Action;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class RegisterPage extends Register
{
    protected static string $layout = 'filament.components.layout.auth';
    protected static string $view = 'filament.pages.register-page';

    protected ?string $maxWidth = '3xl';

    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label('Full Name')
            ->required()
            ->maxLength(255)
            ->autofocus();
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label('Email Address')
            ->email()
            ->required()
            ->maxLength(255)
            ->unique($this->getUserModel());
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label('Password')
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->rule(Password::default())
            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
            ->same('passwordConfirmation')
            ->validationAttribute('password');
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')
            ->label('Confirm Password')
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->dehydrated(false);
    }

    public function loginAction(): Action
    {
        return Action::make('login')
            ->link()
            ->label('Masuk Disini')
            ->url(filament()->getLoginUrl());
    }

    public function getTitle(): string | Htmlable
    {
        return 'Create a New Account';
    }

    public function getHeading(): string | Htmlable
    {
        return 'Register';
    }

    public function getRegisterFormAction(): Action
    {
        return Action::make('register')
            ->label('Register')
            ->submit('register');
    }
}
