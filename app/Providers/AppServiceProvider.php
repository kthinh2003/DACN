<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema; 
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\PhotoModel;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

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
        Blade::directive('formatmoney', function ($money) {
            return "<?php echo number_format($money, 0,',','.').'đ'; ?>";
        });

        foreach (config('permissions') as $key => $permissions) {
            foreach ($permissions as $action => $permission) {
                Gate::define("{$key}-{$action}", function (User $user) use ($permission) {
                    return $user->CheckPermissionAccess($permission);
                });
            }
        }

        Schema::defaultStringLength(191);

        // Share banner globally for all client views
        View::composer('client.*', function ($view) {
            $banner = PhotoModel::select('name', 'desc', 'photo_path')
                ->where('type', 'banner')
                ->get();
            $view->with('banner', $banner);
        });
    }
}
