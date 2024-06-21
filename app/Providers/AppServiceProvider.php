// app/Providers/AppServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
/**
* Register any application services.
*
* @return void
*/
public function register()
{
//
}

/**
* Bootstrap any application services.
*
* @return void
*/
public function boot()
{
if (!function_exists('str_starts_with')) {
function str_starts_with($haystack, $needle) {
return substr($haystack, 0, strlen($needle)) === $needle;
}
}
}
}