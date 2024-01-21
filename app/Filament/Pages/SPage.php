<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Livewire\Attributes\Url;

class SPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.s-page';

    #[Url]
    public $action = null;

    public function printer()
    {
        $fil = fopen("/var/www/storage/testbugfile.txt","w");
        fwrite($fil,"this file was written to by ".__FUNCTION__);
        fclose($fil);
        return "Printing: ".'$printMe';
    }
}
