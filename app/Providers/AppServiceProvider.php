<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Columns\Column;
use Filament\Tables\Filters\BaseFilter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $this->autoTranslateLabels();
    }

    private function autoTranslateLabels()
{
    $this->translateLabels([
        Field::class,
        BaseFilter::class,
        Placeholder::class,
        Column::class,
        // or even `BaseAction::class`,
    ]);
}
 
private function translateLabels(array $components = [])
{
    foreach($components as $component) {
        $component::configureUsing(function ($c): void {
            $c->translateLabel();
        });
    }
}
}
