<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$routes = [
    [
        'path'          => '/',
        'type'          => 'get',
        'controller'    => 'Admin\Dashboard\DashboardController',
        'method'        => 'index',
    ],
    [
        'path'          => 'users',
        'type'          => 'resource',
        'controller'    => 'Admin\User\UsersController'
    ],
    [
        'path'          => 'users/{id}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\User\UsersController',
        'method'        => 'restore',
        'name'          => 'users.restore'
    ],
    [
        'path'          => 'users/{id}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\User\UsersController',
        'method'        => 'forceDelete',
        'name'          => 'users.delete.trashed'
    ],
    [
        'path'          => 'profile',
        'type'          => 'get',
        'controller'    => 'Admin\Profile\ProfileController',
        'method'        => 'edit',
        'name'          => 'profile.edit'
    ],
    [
        'path'          => 'profile',
        'type'          => 'put',
        'controller'    => 'Admin\Profile\ProfileController',
        'method'        => 'update',
        'name'          => 'profile.update'
    ],
    [
        'path'          => 'profile/media/{image}/delete',
        'type'          => 'get',
        'controller'    => 'Admin\Profile\ProfileController',
        'method'        => 'deleteMediaImage',
        'name'          => 'profile.media.delete'
    ],
    [
        'path'          => 'roles',
        'type'          => 'resource',
        'controller'    => 'Admin\Role\RolesController'
    ],
    [
        'path'          => 'menus',
        'type'          => 'resource',
        'controller'    => 'Admin\Menu\MenusController'
    ],
    [
        'path'          => 'menus.menu_items',
        'type'          => 'resource',
        'controller'    => 'Admin\Menu\Items\MenuItemsController'
    ],
    [
        'path'          => 'folders',
        'type'          => 'resource',
        'controller'    => 'Admin\Folder\FoldersController'
    ],
    [
        'path'          => 'groups',
        'type'          => 'resource',
        'controller'    => 'Admin\Group\GroupsController'
    ],
    [
        'path'          => 'pages',
        'type'          => 'resource',
        'controller'    => 'Admin\Page\PagesController'
    ],
    [
        'path'          => 'pages/{id}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\Page\PagesController',
        'method'        => 'restore',
        'name'          => 'pages.restore'
    ],
    [
        'path'          => 'pages/{id}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\Page\PagesController',
        'method'        => 'forceDelete',
        'name'          => 'pages.delete.trashed'
    ],
    [
        'path'          => 'pages/{page}/media/{image}/delete',
        'type'          => 'get',
        'controller'    => 'Admin\Page\PagesController',
        'method'        => 'deleteMediaImage',
        'name'          => 'pages.media.delete'
    ],
    [
        'path'          => 'blogs',
        'type'          => 'resource',
        'controller'    => 'Admin\Blog\BlogsController'
    ],
    [
        'path'          => 'blogs/{id}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\Blog\BlogsController',
        'method'        => 'restore',
        'name'          => 'blogs.restore'
    ],
    [
        'path'          => 'blogs/{id}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\Blog\BlogsController',
        'method'        => 'forceDelete',
        'name'          => 'blogs.delete.trashed'
    ],
    [
        'path'          => 'blogs/{id}/settings',
        'type'          => 'get',
        'controller'    => 'Admin\Blog\BlogsController',
        'method'        => 'showSettings',
        'name'          => 'blogs.settings'
    ],
    [
        'path'          => 'blogs/{id}/settings',
        'type'          => 'put',
        'controller'    => 'Admin\Blog\BlogsController',
        'method'        => 'updateSettings',
        'name'          => 'blogs.settings.update'
    ],
    [
        'path'          => 'blogs/{id}/settings/{setting}/delete',
        'type'          => 'get',
        'controller'    => 'Admin\Blog\BlogsController',
        'method'        => 'clearSetting',
        'name'          => 'blogs.settings.clear'
    ],
    [
        'path'          => 'blogs/{blog}/posts',
        'type'          => 'resource',
        'controller'    => 'Admin\Blog\Post\PostsController'
    ],
    [
        'path'          => 'blogs/{blog}/posts/{post}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\Blog\Post\PostsController',
        'method'        => 'restore',
        'name'          => 'posts.restore'
    ],
    [
        'path'          => 'blogs/{blog}/posts/{post}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\Blog\Post\PostsController',
        'method'        => 'forceDelete',
        'name'          => 'posts.delete.trashed'
    ],
    [
        'path'          => 'blogs/{blog}/posts/{post}/media/{image}/delete',
        'type'          => 'get',
        'controller'    => 'Admin\Blog\Post\PostsController',
        'method'        => 'deleteMediaImage',
        'name'          => 'posts.media.delete'
    ],
    [
        'path'          => 'currencies',
        'type'          => 'resource',
        'controller'    => 'Admin\Currency\CurrenciesController'
    ],
    [
        'path'          => 'currencies/{id}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\Currency\CurrenciesController',
        'method'        => 'restore',
        'name'          => 'currencies.restore'
    ],
    [
        'path'          => 'currencies/{id}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\Currency\CurrenciesController',
        'method'        => 'forceDelete',
        'name'          => 'currencies.delete.trashed'
    ],
    [
        'path'          => 'offices',
        'type'          => 'resource',
        'controller'    => 'Admin\Office\OfficesController',
        'except'        => ['create', 'store', 'destroy']
    ],
    [
        'path'          => 'products',
        'type'          => 'resource',
        'controller'    => 'Admin\Product\ProductsController'
    ],
    [
        'path'          => 'products/{id}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\Product\ProductsController',
        'method'        => 'restore',
        'name'          => 'products.restore'
    ],
    [
        'path'          => 'products/{id}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\Product\ProductsController',
        'method'        => 'forceDelete',
        'name'          => 'products.delete.trashed'
    ],
    [
        'path'          => 'products/{product}/media/{image}/delete',
        'type'          => 'get',
        'controller'    => 'Admin\Product\ProductsController',
        'method'        => 'deleteMediaImage',
        'name'          => 'products.media.delete'
    ],
    [
        'path'          => 'product_types',
        'type'          => 'resource',
        'controller'    => 'Admin\Product\Types\ProductTypesController'
    ],
    [
        'path'          => 'product_attributes',
        'type'          => 'resource',
        'controller'    => 'Admin\Product\Attributes\ProductAttributesController'
    ],
    [
        'path'          => 'packages',
        'type'          => 'resource',
        'controller'    => 'Admin\Package\PackagesController'
    ],
    [
        'path'          => 'packages/{id}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\Package\PackagesController',
        'method'        => 'restore',
        'name'          => 'packages.restore'
    ],
    [
        'path'          => 'packages/{id}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\Package\PackagesController',
        'method'        => 'forceDelete',
        'name'          => 'packages.delete.trashed'
    ],
    [
        'path'          => 'packages/{package}/media/{image}/delete',
        'type'          => 'get',
        'controller'    => 'Admin\Package\PackagesController',
        'method'        => 'deleteMediaImage',
        'name'          => 'packages.media.delete'
    ],
    [
        'path'          => 'subscriptions',
        'type'          => 'resource',
        'controller'    => 'Admin\Subscription\SubscriptionsController',
        'except'        => ['create', 'store', 'destroy']
    ],
    [
        'path'          => 'redirects',
        'type'          => 'resource',
        'controller'    => 'Admin\Redirect\RedirectsController'
    ],
    [
        'path'          => 'settings',
        'type'          => 'resource',
        'controller'    => 'Admin\Setting\SettingsController'
    ],
    [
        'path'          => 'settings/manage/all',
        'type'          => 'get',
        'controller'    => 'Admin\Setting\SettingsController',
        'method'        => 'manageSettings',
        'name'          => 'settings.manage'
    ],
    [
        'path'          => 'settings/group/{group}',
        'type'          => 'get',
        'controller'    => 'Admin\Setting\SettingsController',
        'method'        => 'showGroupSetting',
        'name'          => 'settings.group'
    ],
    [
        'path'          => 'settings/group/{group}',
        'type'          => 'put',
        'controller'    => 'Admin\Setting\SettingsController',
        'method'        => 'updateGroupSetting',
        'name'          => 'settings.group.update'
    ],
    [
        'path'          => 'settings/group/{group}/{setting}/clear',
        'type'          => 'get',
        'controller'    => 'Admin\Setting\SettingsController',
        'method'        => 'clearGroupSetting',
        'name'          => 'settings.group.setting.clear'
    ],
    [
        'path'          => 'countries',
        'type'          => 'resource',
        'controller'    => 'Admin\Country\CountriesController'
    ],
    [
        'path'          => 'countries/{id}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\Country\CountriesController',
        'method'        => 'restore',
        'name'          => 'countries.restore'
    ],
    [
        'path'          => 'countries/{id}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\Country\CountriesController',
        'method'        => 'forceDelete',
        'name'          => 'countries.delete.trashed'
    ],
    [
        'path'          => 'countries/{country}/states',
        'type'          => 'resource',
        'controller'    => 'Admin\Country\State\StatesController'
    ],
    [
        'path'          => 'countries/{country}/states/{id}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\Country\State\StatesController',
        'method'        => 'restore',
        'name'          => 'states.restore'
    ],
    [
        'path'          => 'countries/{country}/states/{id}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\Country\State\StatesController',
        'method'        => 'forceDelete',
        'name'          => 'states.delete.trashed'
    ],
    [
        'path'          => 'timezones',
        'type'          => 'resource',
        'controller'    => 'Admin\TimeZone\TimeZonesController'
    ],
    [
        'path'          => 'timezones/{id}/restore',
        'type'          => 'put',
        'controller'    => 'Admin\TimeZone\TimeZonesController',
        'method'        => 'restore',
        'name'          => 'timezones.restore'
    ],
    [
        'path'          => 'timezones/{id}/delete/trashed',
        'type'          => 'delete',
        'controller'    => 'Admin\TimeZone\TimeZonesController',
        'method'        => 'forceDelete',
        'name'          => 'timezones.delete.trashed'
    ],
    [
        'path'          => 'system/usage',
        'type'          => 'get',
        'controller'    => 'Admin\System\SystemController',
        'method'        => 'showUsage',
        'name'          => 'system.usage'
    ],
    [
        'path'          => 'system/cache',
        'type'          => 'get',
        'controller'    => 'Admin\System\SystemController',
        'method'        => 'showCache',
        'name'          => 'system.cache'
    ],
    [
        'path'          => 'system/cache/flush',
        'type'          => 'delete',
        'controller'    => 'Admin\System\SystemController',
        'method'        => 'flushCache',
        'name'          => 'system.cache.flush'
    ],
    [
        'path'          => 'system/logs',
        'type'          => 'get',
        'controller'    => 'Admin\System\SystemController',
        'method'        => 'showLogs',
        'name'          => 'system.logs'
    ]
];


Route::domain(config('app.base_domain'))->name('admin.')->group(function () use (&$routes) {
    Route::prefix('admin')->group(function () use (&$routes) {

        if (filled($routes)) {
            foreach ($routes as $index => $route) {
                 create_route($route['path'], $route);
            }
        }

        // Catch All Route
        Route::any('{any}', function () {
            abort(404);
        })->where('any', '.*')->middleware('force.https');
    });
});

