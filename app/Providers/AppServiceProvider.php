<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();

        // Define quem pode criar broadcasts
        Gate::define('manage broadcasts', function (User $user) {
            // por exemplo: verifica se é admin
            return $user->is_admin; 
        });

        // Define quem pode ver o dashboard do WhatsApp
        Gate::define('view contact messages', function (User $user) {
            return $user->is_admin; 
        });
        $this->registerPolicies();

    // libera para qualquer usuário logado
    Gate::define('view contact messages', function ($user) {
        return true;
    });
    }
}
