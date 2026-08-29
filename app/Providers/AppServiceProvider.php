<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Gate::define('admin', function (User $user) {
        //     if ($user->id === 1) {
        //         return Response::allow();
        //     }

        //     return Response::denyAsNOtFound();
        // });
    }
}
