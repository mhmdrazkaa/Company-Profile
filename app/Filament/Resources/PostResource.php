<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;//Buat Select option untuk menampilakn nama dari foreign key relation

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul'),
                Forms\Components\TextArea::make('konten'),
                FileUpload::make('file')
                    ->label('Upload Foto')
                    ->disk('public')
                    ->directory('uploads')
                    ->preserveFilenames()
                    ->required(),

                Select::make('category_id')
                ->label('Category')
                ->options(Category::all()->pluck('judul', 'id'))
                ->searchable()
                ->required(),
                Forms\Components\TextArea::make('deskripsi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul'),
                Tables\Columns\TextColumn::make('konten'),
                ImageColumn::make('file')
                    ->label('Foto')
                    ->disk('public')
                    ->getStateUsing(fn ($record) => $record->file)
                    ->width(200)
                    ->height(100),
                Tables\Columns\TextColumn::make('category.judul')->label('Kategori'),
                Tables\Columns\TextColumn::make('created_at')->since()
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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
