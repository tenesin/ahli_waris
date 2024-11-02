<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssetResource\Pages;
use App\Models\Asset;
use App\Models\AssetCategory;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class AssetResource extends Resource
{
    protected static ?string $model = Asset::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(__('Informasi Aset'))
                    ->schema([
                        Forms\Components\Select::make('category_id')
                            ->required()
                            ->label('Kategori Aset')
                            ->options(fn (): Collection => AssetCategory::all()->pluck('category_name', 'category_id')),
                        Forms\Components\TextInput::make('asset_name')
                            ->required()
                            ->label('Nama Aset')
                            ->maxLength(255),
                        Forms\Components\Group::make([
                            Forms\Components\TextInput::make('asset_total')
                                ->required()
                                ->label('Total Aset')
                                ->numeric(),
                            Forms\Components\TextInput::make('asset_uom')
                                ->required()
                                ->label('Satuan Aset')
                                ->maxLength(255),
                        ])->columns(2),
                        Forms\Components\TextInput::make('asset_description')
                            ->maxLength(255)
                            ->label('Deskripsi Aset')
                            ->default(null),
                        Forms\Components\TextInput::make('asset_estimated_value')
                            ->required()
                            ->label('Nilai Estimasi Aset')
                            ->prefix("Rp. ")
                            ->currencyMask(thousandSeparator: '.', decimalSeparator: ',', precision: 2)
                            ->numeric(),
                        Forms\Components\Select::make('asset_status')
                            ->label('Status Aset')
                            ->required()
                            ->options([
                                'Belum Dialokasikan' => 'Belum Dialokasikan',
                                'Sedang Dialokasikan' => 'Sedang Dialokasikan',
                                'Sudah Dialokasikan' => 'Sudah Dialokasikan',
                            ])
                            ->default('Belum Dialokasikan'),
                    ]),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.category_name')
                    ->label(__('Jenis Aset')),
                Tables\Columns\TextColumn::make('asset_name')
                    ->label(__('Nama Aset')),
                Tables\Columns\TextColumn::make('asset_estimated_value')
                    ->label(__('Nilai Aset'))
                    ->money('IDR'),
                Tables\Columns\TextColumn::make('asset_status')
                    ->label(__('Status Aset'))
                    ->color(fn (Asset $record): string => match($record->asset_status) {
                        'Belum Dialokasikan' => 'danger',
                        'Sedang Dialokasikan' => 'warning',
                        'Sudah Dialokasikan' => 'success',
                        default => 'secondary',
                    }),
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
