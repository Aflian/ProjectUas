<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Merek Mobil')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('brand')
                    ->label('Brand Mobil')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('plate_number')
                    ->label('Nomor Plat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('year')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'tersedia'=>'TERSEDIA',
                        'disewa'=>'SEDANG DI RENTAL'
                    ]),
                Forms\Components\TextInput::make('price_per_day')
                    ->label('HARGA PERHARI')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('denda_per_hari')
                    ->label('DENDA PERHARI')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('kategori')
                    ->required()
                    ->options([
                        'sport car' => 'SPORT CAR',
                        'city car' => 'MOBIL KOMERSIL',
                    ]),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Mobil')
                    ->disk('public')
                    ->image()
                    ->imagePreviewHeight('150') // kecilkan preview agar tidak berat
                    ->maxSize(2048) // 2MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp']),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand')
                    ->searchable(),
                Tables\Columns\TextColumn::make('plate_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('price_per_day')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('denda_per_hari')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->circular() // optional: lebih ringan
                    ->height(60),
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
