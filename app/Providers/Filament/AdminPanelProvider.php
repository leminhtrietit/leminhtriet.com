<?php

namespace App\Providers\Filament;
use App\Filament\Widgets\CourseStats;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\Navigation\MenuItem;
use Filament\Pages\Auth\Register;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Filament\Resources\DepartmentResource;
use App\Filament\Resources\SubjectResource;
use App\Filament\Resources\UserResource;
use App\Filament\Pages\Auth\EditUserProfile;
use Filament\Facades\Filament;
use App\Http\Middleware\ForcePasswordChange;
use App\Filament\Pages\ChangePassword;
use App\Http\Middleware\EnsureUserHasRole; // Thêm use
use App\Http\Controllers\CustomLogoutController; // Nếu cần dùng reference

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            //->login() //dùng login của laravel
            ->brandName('MinhTrietEras')
            ->spa()          

            ->favicon(asset('assets/images/logo_tron.png'))
            ->colors([
                'primary' => Color::Hex('#221a56'),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->profile(\App\Filament\Pages\Auth\EditProfile::class)
            ->pages([
                Pages\Dashboard::class,
            ])

            //->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            // ->widgets([
            //     // Widgets\AccountWidget::class,
            //     //CourseStats::class,//đếm số khóa học đã đăng ký trông ngày
            //     // Widgets\FilamentInfoWidget::class,
            // ])
            
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,


            ])
            ->authMiddleware([
                Authenticate::class,
                EnsureUserHasRole::class . ':admin', // <-- Chỉ cho phép admin

            ]);
    }
}
