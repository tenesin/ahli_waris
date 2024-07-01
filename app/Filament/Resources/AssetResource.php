<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssetResource\Pages;
use App\Filament\Resources\AssetResource\RelationManagers;
use App\Models\Asset;
use App\Models\AssetCategory;
use App\Models\AssetStatus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Get;
use Illuminate\Support\Collection;

class AssetResource extends Resource
{
    protected static ?string $model = Asset::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static function booted()
    {
        static::creating(function (Asset $asset) {
            $asset->user_id = auth()->id();
        });
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('ahli-waris.resources.assets.sections.asset_information'))
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->required()
                            ->label(__('ahli-waris.resources.assets.fields.category_id'))
                            ->options(fn (): Collection => AssetCategory::all()->pluck('category_name', 'category_id')),
                        Forms\Components\TextInput::make('asset_name')
                            ->required()
                            ->label(__('ahli-waris.resources.assets.fields.asset_name'))
                            ->maxLength(255),
                        Forms\Components\Group::make([
                            Forms\Components\TextInput::make('asset_total')
                                ->required()
                                ->label(__('ahli-waris.resources.assets.fields.asset_total'))
                                ->numeric(),
                            Forms\Components\TextInput::make('asset_uom')
                                ->required()
                                ->label(__('ahli-waris.resources.assets.fields.asset_uom'))
                                ->maxLength(255),
                        ])->columns(2),
                        Forms\Components\TextInput::make('asset_description')
                            ->maxLength(255)
                            ->label(__('ahli-waris.resources.assets.fields.asset_description'))
                            ->default(null),
                        Forms\Components\TextInput::make('asset_estimated_value')
                            ->required()
                            ->label(__('ahli-waris.resources.assets.fields.asset_estimated_value'))
                            ->prefix("Rp. ")
                            ->currencyMask(thousandSeparator: '.', decimalSeparator: ',', precision: 2)
                            ->numeric(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.category_name')
                    ->label(__('ahli-waris.resources.assets.fields.category_id')),
                Tables\Columns\TextColumn::make('asset_name')
                    ->label(__('ahli-waris.resources.assets.fields.asset_name')),
                Tables\Columns\TextColumn::make('asset_estimated_value')
                    ->label(__('ahli-waris.resources.assets.fields.asset_estimated_value'))
                    ->money('Rp. '),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssets::route('/'),
            'create' => Pages\CreateAsset::route('/create'),
            'edit' => Pages\EditAsset::route('/{record}/edit'),
        ];
    }
}
