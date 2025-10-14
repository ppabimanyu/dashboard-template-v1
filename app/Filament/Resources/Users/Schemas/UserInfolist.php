<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()
                    ->schema([
                        Section::make('User Information')
                            ->description('Basic details about the user.')
                            ->schema([
                                ImageEntry::make('header_image')
                                    ->disk('s3'),
                                TextEntry::make('name'),
                                TextEntry::make('email')
                                    ->label('Email address')
                                    ->icon(Heroicon::Envelope)
                                    ->iconColor('primary'),
                                TextEntry::make('email_verified_at')
                                    ->dateTime()
                                    ->placeholder('-'),
                            ])
                            ->columnSpan(3),
                        Section::make('Metadata')
                            ->description('User record information.')
                            ->schema([
                                TextEntry::make('created_at')
                                    ->dateTime()
                                    ->placeholder('-'),
                                TextEntry::make('updated_at')
                                    ->dateTime()
                                    ->placeholder('-'),
                            ])
                            ->columnSpan(1),
                    ])
                    ->columns(4)
                    ->columnSpanFull(),
            ]);
    }
}
