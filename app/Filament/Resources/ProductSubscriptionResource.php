<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductSubscriptionResource\Pages;
use App\Filament\Resources\ProductSubscriptionResource\RelationManagers;
use App\Models\Product;
use App\Models\ProductSubscription;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductSubscriptionResource extends Resource
{
    protected static ?string $model = ProductSubscription::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Transactions';

    public static function getNavigationBadge(): ?string
    {
        return (string) ProductSubscription::where('is_paid', false)->count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make()
                    ->columns(1)
                    ->schema([
                        Wizard\Step::make('Product and Price')
                            ->schema([
                                Grid::make()
                                    ->columns(2)
                                    ->schema([
                                        Forms\Components\Select::make('product_id')
                                            ->relationship('product', 'name')
                                            ->searchable()
                                            ->preload()
                                            ->required()
                                            ->live()
                                            ->afterStateUpdated(function ($state, callable $set) {
                                                $product = Product::find($state);
                                                $price = $product ? $product->price_per_person : 0;
                                                $duration = $product ? $product->duration : 0;

                                                $tax = 0.11;
                                                $totalTaxAmount = $tax * $price;
                                                $totalAmount = $price + $totalTaxAmount;

                                                $set('price', $price);
                                                $set('duration', $duration);
                                                $set('total_tax_amount', number_format($totalTaxAmount, 0, '', ''));
                                                $set('total_amount', number_format($totalAmount, 0, '', ''));
                                            })
                                            ->afterStateHydrated(function (callable $get, callable $set, $state) {
                                                if ($state) {
                                                    $product = Product::find($state);
                                                    $price = $product ? $product->price_per_person : 0;
                                                    $duration = $product ? $product->duration : 0;

                                                    $tax = 0.11;
                                                    $totalTaxAmount = $tax * $price;
                                                    $totalAmount = $price + $totalTaxAmount;

                                                    $set('price', $price);
                                                    $set('duration', $duration);
                                                    $set('total_tax_amount', number_format($totalTaxAmount, 0, '', ''));
                                                    $set('total_amount', number_format($totalAmount, 0, '', ''));
                                                }
                                            }),

                                        Forms\Components\TextInput::make('price')
                                            ->label('Price per person')
                                            ->prefix('IDR')
                                            ->numeric()
                                            ->required()
                                            ->readOnly(),

                                        Forms\Components\TextInput::make('total_tax_amount')
                                            ->label('Tax Amount')
                                            ->prefix('IDR')
                                            ->numeric()
                                            ->required()
                                            ->readOnly(),

                                        Forms\Components\TextInput::make('total_amount')
                                            ->label('Total Amount')
                                            ->prefix('IDR')
                                            ->numeric()
                                            ->required()
                                            ->readOnly(),

                                        Forms\Components\TextInput::make('duration')
                                            ->label('Duration')
                                            ->prefix('Month')
                                            ->numeric()
                                            ->required()
                                            ->readOnly(),
                                    ]),
                            ]),

                        Wizard\Step::make('Customer Information')
                            ->schema([
                                Grid::make()
                                    ->columns(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255),

                                        Forms\Components\TextInput::make('phone')
                                            ->required()
                                            ->maxLength(255),

                                        Forms\Components\TextInput::make('email')
                                            ->required()
                                            ->maxLength(255),
                                    ]),
                            ]),

                        Wizard\Step::make('Payment Information')
                            ->schema([
                                Forms\Components\TextInput::make('booking_trx_id')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('customer_bank_name')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('customer_bank_account')
                                    ->required()
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('customer_bank_number')
                                    ->required()
                                    ->maxLength(255),

                                ToggleButtons::make('is_paid')
                                    ->label('Apakah sudah membayar?')
                                    ->boolean()
                                    ->grouped()
                                    ->icons([
                                        true => 'heroicon-o-pencil',
                                        false => 'heroicon-o-clock',
                                    ])
                                    ->required(),

                                Forms\Components\FileUpload::make('proof')
                                    ->image()
                                    ->required(),
                            ]),
                    ])
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('product.thumbnail'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('booking_trx_id')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_paid')
                    ->boolean()
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->label('Terverifikasi'),
            ])
            ->filters([
                SelectFilter::make('product_id')
                    ->label('Product')
                    ->relationship('product', 'name'),
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('approve')
                    ->label('Approve')
                    ->action(function (ProductSubscription $record) {
                        $record->is_paid = true;
                        $record->save();

                        Notification::make()
                            ->title('Order Approved')
                            ->success()
                            ->body('The order has been successfully approved.')
                            ->send();
                    })
                    ->color('success')
                    ->requiresConfirmation()
                    ->visible(fn(ProductSubscription $record) => !$record->is_paid),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListProductSubscriptions::route('/'),
            'create' => Pages\CreateProductSubscription::route('/create'),
            'edit' => Pages\EditProductSubscription::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
