<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PegawaiResource\Pages;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Forms\Components\DatePicker;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')
                    ->label('Upload Foto')
                    ->disk('public')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->required(),
                Forms\Components\TextInput::make('nama_lengkap'),
                Forms\Components\Select::make('jenis_kelamin')
                    ->options([
                        'Perempuan' => 'Perempuan',
                        'Laki laki' => 'Laki-Laki',
                    ])
                    ->label('Jenis Kelamin'),
                DatePicker::make('tgl_lahir')
                    ->label('Tanggal Lahir')
                    ->format('Y-m-d'),
                Forms\Components\TextInput::make('tmpt_lahir')->label('Tempat Lahir'),
                Forms\Components\TextInput::make('no_telp')->label('Nomor Telepon'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('jabatan'),
                FileUpload::make('foto')
                    ->label('Upload Foto')
                    ->disk('public')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->required(),
                FileUpload::make('foto')
                    ->label('Upload Foto')
                    ->disk('public')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->required(),
                FileUpload::make('foto')
                    ->label('Upload Foto')
                    ->disk('public')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->required(),
                FileUpload::make('foto')
                    ->label('Upload Foto')
                    ->disk('public')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->required(),
                FileUpload::make('foto')
                    ->label('Upload Foto')
                    ->disk('public')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->required(),
                FileUpload::make('foto')
                    ->label('Upload Foto')
                    ->disk('public')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->required(),
                FileUpload::make('foto')
                    ->label('Upload Foto')
                    ->disk('public')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_lengkap')->searchable(),
                TextColumn::make('jenis_kelamin'),
                TextColumn::make('tgl_lahir')->label('Tanggal Lahir'),
                TextColumn::make('tmpt_lahir')->label('Tempat Lahir'),
                TextColumn::make('no_telp')->label('Nomor Telepon'),
                TextColumn::make('email'),
                TextColumn::make('jabatan'),
                ImageColumn::make('foto')
                    ->label('Foto')
                    ->disk('public')
                    ->getStateUsing(fn ($record) => $record->foto)
                    ->width(100)
                    ->height(100),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }
}
