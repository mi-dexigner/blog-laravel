- composer required laravel/breeze
- php artisan breeze:install
    - 0 
    - no
    - no
    - npm install
    - npm run build
    - add usertype on users table file
    - php artisan migrate
- php artisan make:controller HomeController
- php artisan make:middleware Admin
- open Admin.php file in the middleware folder add this code

```php 
public function handle(Request $request, Closure $next): Response
    {
        if(Auth()->user()->role =='admin'){

        return $next($request);
    }
    abort(401);
    }
```
- open kernal.php add this line
```php
'admin' => \App\Http\Middleware\Admin::class,
```
- then open route fils `web.php`
```php
Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name("home");

Route::get('post',[HomeController::class,'post'])->middleware(['auth','admin'])->name('post');
```
- php artisan make:controller AdminController
- php artisan make:model Post -m
- php artisan migrate