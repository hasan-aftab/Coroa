<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\Widgets\UserOverview;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use AymanAlhattami\FilamentPageWithSidebar\FilamentPageSidebar;
use AymanAlhattami\FilamentPageWithSidebar\PageNavigationItem;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Administração';

    protected static ?string $navigationLabel = 'Usuários';

    protected static ?string $modelLabel = 'Usuários';

    protected static ?string $recordTitleAttribute = 'name';

    /**
     * @param Model $record
     * @return string
     */
    public static function getGlobalSearchResultTitle(Model $record): string
    {
        return $record->name; // TODO: Change the autogenerated stub
    }

    /**
     * @return string[]
     */
    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email']; // TODO: Change the autogenerated stub
    }

    /**
     * @param Model $record
     * @return FilamentPageSidebar
     */
    public static function sidebar(Model $record): FilamentPageSidebar
    {
        return FilamentPageSidebar::make()
            ->setTitle($record->name)
            ->setDescription($record->created_at)
            ->setNavigationItems([
                PageNavigationItem::make(__('base.list_user'))
                    ->translateLabel()
                    ->url(static::getUrl('index'))->icon('heroicon-o-user-group')
                    ->isActiveWhen(function () {
                        return request()->routeIs(static::getRouteBaseName() . '.list-users');
                    }),
                PageNavigationItem::make(__('base.view_user'))
                    ->translateLabel()
                    ->url(static::getUrl('view', ['record' => $record->id]))->icon('heroicon-o-user')
                    ->isActiveWhen(function () {
                        return request()->routeIs(static::getRouteBaseName() . '.view');
                    }),
                PageNavigationItem::make(__('base.edit_user'))
                    ->translateLabel()
                    ->url(static::getUrl('edit', ['record' => $record->id]))
                    ->icon('heroicon-o-pencil-square')
                    ->isActiveWhen(function () {
                        return request()->routeIs(static::getRouteBaseName() . '.edit');
                    }),
                //PageNavigationItem::make(__('base.change_password'))
                   // ->translateLabel()
                   // ->url(static::getUrl('password.change', ['record' => $record->id]))
                    //->icon('heroicon-o-key')
                    //->isActiveWhen(function () {
                  //      return request()->routeIs(static::getRouteBaseName() . '.password.change');
                  //  }),

            ]);
    }


    /**
     * @param Form $form
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Name')
                            ->required()
                            ->maxLength(191),
                        Forms\Components\TextInput::make('email')
                            ->label('E-mail')
                            ->email()
                            ->required()
                            ->maxLength(191),
                        Forms\Components\DateTimePicker::make('email_verified_at')
                            ->label('Verificação E-mail'),
                    ]),
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('affiliate_revenue_share')
                            ->label('Revenue Share (%)')
                            ->required()
                            ->numeric()
                            ->default(0),
                        Forms\Components\TextInput::make('affiliate_cpa')
                            ->label('CPA')
                            ->required()
                            ->numeric()
                            ->default(0),
                        Forms\Components\Toggle::make('is_demo_agent')
                            ->label('DEMO')
                            ->columnSpanFull()
                        ,
                    ])->columns(2)
            ]);
    }

    /**
     * @param Table $table
     * @return Table
     */
    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wallet.balance')
                    ->label('Saldo')
                    ->money('BRL'),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    /**
     * @return string[]
     */
    public static function getWidgets(): array
    {
        return [
            UserOverview::class,
        ];
    }

    /**
     * @return array|\Filament\Resources\Pages\PageRegistration[]
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
            'view' => Pages\ViewUser::route('/{record}/view'),
            'password.change' => Pages\ChangePasswordUser::route('/{record}/password/change'),
        ];
    }
}