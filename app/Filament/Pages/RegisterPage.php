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
            ->label(__('ahli-waris.pages.auth.register.form.name.label'))
            ->required()
            ->maxLength(255)
            ->autofocus();
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label(__('ahli-waris.pages.auth.register.form.email.label'))
            ->email()
            ->required()
            ->maxLength(255)
            ->unique($this->getUserModel());
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label(__('ahli-waris.pages.auth.register.form.password.label'))
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->rule(Password::default())
            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
            ->same('passwordConfirmation')
            ->validationAttribute(__('ahli-waris.pages.auth.register.form.password.validation_attribute'));
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')
            ->label(__('ahli-waris.pages.auth.register.form.password_confirmation.label'))
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->dehydrated(false);
    }

    public function loginAction(): Action
    {
        return Action::make('login')
            ->link()
            ->label(__('ahli-waris.pages.auth.register.actions.login.label'))
            ->url(filament()->getLoginUrl());
    }


    public function getTitle(): string | Htmlable
    {
        return __('ahli-waris.pages.auth.register.title');
    }

    public function getHeading(): string | Htmlable
    {
        return __('ahli-waris.pages.auth.register.heading');
    }


    public function getRegisterFormAction(): Action
    {
        return Action::make('register')
            ->label(__('ahli-waris.pages.auth.register.form.actions.register.label'))
            ->submit('register');
    }
}
