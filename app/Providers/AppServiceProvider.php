<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('renderIframe', function ($content) {
            return "<?php 
                \$iframeRegex = '/<iframe.*?<\/iframe>/i';
                if (preg_match(\$iframeRegex, $content)) { 
                    echo {$content};
                } else {
                    echo '<p>'. {$content} .'</p>'; 
                }
            ?>";
        });
    }

   
}
