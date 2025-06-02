<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Resetar roles e permissions cacheadas
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Criar Permissions
        Permission::create(['name' => 'access admin panel']);
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage services']);
        Permission::create(['name' => 'manage clients']);
        Permission::create(['name' => 'manage testimonials']);
        Permission::create(['name' => 'edit about page']);

        // Criar Roles e atribuir permissions existentes
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all()); // Super-admin tem todas as permissões

        $role = Role::create(['name' => 'admin'])
            ->givePermissionTo(['access admin panel', 'manage services', 'manage clients', 'manage testimonials', 'edit about page']);

        $role = Role::create(['name' => 'editor'])
            ->givePermissionTo(['access admin panel', 'manage services', 'manage testimonials']);

        // Criar um usuário admin de exemplo e atribuir role (opcional, mas útil para começar)
        // Certifique-se que o model User está usando o trait HasRoles



$user = \App\Models\User::firstOrCreate(
    ['email' => 'admin@twov.com'],
    [
        'name' => 'Admin TwoV',
        'password' => bcrypt('TwoV@@25') // Lembre-se de mudar essa senha em produção!
    ]
);
$user->assignRole('super-admin'); // Linha crucial para atribuir a role
    }
}