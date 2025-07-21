<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RentalResource\Pages;
use App\Models\Rental;
use App\Models\User;
use App\Models\Car;
use App\Models\Driver;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RentalResource extends Resource
{
    protected static ?string $model = Rental::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Data Rental Mobil';
    protected static ?string $pluralModelLabel = 'Rental Mobil';
    protected static ?string $modelLabel = 'Rental';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('user_id')
                ->label('Penyewa')
                ->relationship('user', 'name')
                ->required()
                ->searchable(),

            Forms\Components\Select::make('car_id')
                ->label('Mobil')
                ->relationship('car', 'name')
                ->required(),

            Forms\Components\Select::make('driver_id')
                ->label('Supir')
                ->relationship('driver', 'name')
                ->searchable()
                ->nullable(),

            Forms\Components\DatePicker::make('start_date')
                ->label('Tanggal Mulai')
                ->required(),

            Forms\Components\DatePicker::make('end_date')
                ->label('Tanggal Kembali')
                ->required(),

            Forms\Components\TextInput::make('total_days')
                ->label('Jumlah Hari')
                ->numeric()
                ->required()
                ->readOnly(),

            Forms\Components\TextInput::make('total_price')
                ->label('Total Harga')
                ->numeric()
                ->required()
                ->readOnly(),

            Forms\Components\Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'disewa' => 'Disewa',
                    'selesai' => 'Selesai',
                    'dibatalkan' => 'Dibatalkan',
                ])
                ->required(),

            Forms\Components\FileUpload::make('payment_proof')
                ->label('Bukti Pembayaran')
                ->directory('payment_proofs')
                ->image()
                ->nullable(),

            Forms\Components\TextInput::make('denda')
                ->label('Denda')
                ->numeric()
                ->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('user.name')
                ->label('Penyewa')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('car.name')
                ->label('Mobil')
                ->sortable(),

            Tables\Columns\TextColumn::make('driver.name')
                ->label('Supir')
                ->sortable(),

            Tables\Columns\TextColumn::make('start_date')
                ->label('Tgl Mulai')
                ->date()
                ->sortable(),

            Tables\Columns\TextColumn::make('end_date')
                ->label('Tgl Kembali')
                ->date()
                ->sortable(),

            Tables\Columns\TextColumn::make('total_days')
                ->label('Hari')
                ->sortable(),

            Tables\Columns\TextColumn::make('total_price')
                ->label('Total')
                ->money('IDR', true),

            Tables\Columns\TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'pending' => 'warning',
                    'disewa' => 'primary',
                    'selesai' => 'success',
                    'dibatalkan' => 'danger',
                    default => 'gray',
                }),

            Tables\Columns\ImageColumn::make('payment_proof')
                ->label('Bukti Pembayaran')
                ->circular()
                ->defaultImageUrl(fn () => '/placeholder.png'),

            Tables\Columns\TextColumn::make('denda')
                ->label('Denda')
                ->money('IDR', true),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Dibuat')
                ->dateTime()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRentals::route('/'),
            'create' => Pages\CreateRental::route('/create'),
            'edit' => Pages\EditRental::route('/{record}/edit'),
        ];
    }
}
