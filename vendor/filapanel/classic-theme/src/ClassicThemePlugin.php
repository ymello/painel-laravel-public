<?php

namespace Filapanel\ClassicTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\HtmlString;

class ClassicThemePlugin implements Plugin
{
    public function getId(): string
    {
        return 'filapanel-classic-theme';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Css::make('classic-theme', __DIR__ . '/../resources/dist/css/classic.css')
        ], 'filapanel-classic-theme');
    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): self
    {
        return new static();
    }
}
