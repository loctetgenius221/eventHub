<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Création des permissions
        Permission::create(['name' => 'valider compte']);
        Permission::create(['name' => 'desactiver compte']);
        Permission::create(['name' => 'voir liste associations']);
        Permission::create(['name' => 'supprimer compte participant']);
        Permission::create(['name' => 'ajouter role']);
        Permission::create(['name' => 'modifier role']);
        Permission::create(['name' => 'supprimer role']);
        Permission::create(['name' => 'voir liste roles']);
        Permission::create(['name' => 'ajouter permission']);
        Permission::create(['name' => 'modifier permission']);
        Permission::create(['name' => 'supprimer permission']);
        Permission::create(['name' => 'voir liste permissions']);

        // Les permissions qui concernent le participant
        Permission::create(['name' => 'parcourir événements']);
        Permission::create(['name' => 'réserver événements']);
        Permission::create(['name' => 'recevoir confirmation réservation']);
        Permission::create(['name' => 'voir nombre de places disponibles']);

        // Les permissions qui concernent l'association
        Permission::create(['name' => 'publier événements']);
        Permission::create(['name' => 'lire événements']);
        Permission::create(['name' => 'mettre à jour événements']);
        Permission::create(['name' => 'supprimer événements']);
        Permission::create(['name' => 'accéder liste utilisateurs inscrits']);
        Permission::create(['name' => 'voir ensemble événements']);
        Permission::create(['name' => 'refuser réservations']);
        Permission::create(['name' => 'imprimer liste inscrits']);



        // Création des roles et assignations à des permissions
        // Assignation admin
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(
            'valider compte',
            'desactiver compte',
            'voir liste associations',
            'supprimer compte participant',
            'ajouter role',
            'modifier role',
            'supprimer role',
            'voir liste roles',
            'ajouter permission',
            'modifier permission',
            'supprimer permission',
            'voir liste permissions',
        );

        $role = Role::create(['name' => 'association']);
        $role->givePermissionTo([
            'publier événements',
            'lire événements',
            'mettre à jour événements',
            'supprimer événements',
            'accéder liste utilisateurs inscrits',
            'voir ensemble événements',
            'refuser réservations',
            'imprimer liste inscrits',
        ]);

        $role = Role::create(['name' => 'participant']);
        $role->givePermissionTo([
            'parcourir événements',
            'réserver événements',
            'recevoir confirmation réservation',
            'voir nombre de places disponibles'
        ]);

    }
}
