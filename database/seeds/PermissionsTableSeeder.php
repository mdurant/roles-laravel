<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuarios
      Permission::create([

        'name'        => 'Navegar usuarios',
        'slug'        => 'users.index',
        'description' => 'Lista y navega todos los usuarios del sistema',
      ]);

      Permission::create([

        'name'        => 'Ver detalle de  usuarios',
        'slug'        => 'users.show',
        'description' => 'Ver detalle de todos los usuarios del sistema',
      ]);

      Permission::create([

        'name'        => 'Editar usuarios',
        'slug'        => 'users.edit',
        'description' => 'Editar datos de usuarios del sistema',
      ]);

      Permission::create([

        'name'        => 'Eliminar usuarios',
        'slug'        => 'users.destroy',
        'description' => 'Eliminar usuarios del sistema',
      ]);

        //roles
      Permission::create([

        'name'        => 'Navegar roles',
        'slug'        => 'roles.index',
        'description' => 'Lista y navega todos los roles del sistema',
      ]);

      Permission::create([

        'name'        => 'Ver detalle de  roles',
        'slug'        => 'roles.show',
        'description' => 'Ver detalle de todos los roles del sistema',
      ]);

      Permission::create([

        'name'        => 'Creación roles',
        'slug'        => 'roles.create',
        'description' => 'Editar datos de roles del sistema',
      ]);


      Permission::create([

        'name'        => 'Editar roles',
        'slug'        => 'roles.edit',
        'description' => 'Editar datos de roles del sistema',
      ]);

      Permission::create([

        'name'        => 'Eliminar roles',
        'slug'        => 'roles.destroy',
        'description' => 'Eliminar roles del sistema',
      ]);

      //productos
      Permission::create([

        'name'        => 'Navegar productos',
        'slug'        => 'products.index',
        'description' => 'Lista y navega todos los productos del sistema',
      ]);

      Permission::create([

        'name'        => 'Ver detalle de  productos',
        'slug'        => 'products.show',
        'description' => 'Ver detalle de todos los productos del sistema',
      ]);

      Permission::create([

        'name'        => 'Creación productos',
        'slug'        => 'products.create',
        'description' => 'Editar datos de productos del sistema',
      ]);


      Permission::create([

        'name'        => 'Editar productos',
        'slug'        => 'products.edit',
        'description' => 'Editar datos de productos del sistema',
      ]);

      Permission::create([

        'name'        => 'Eliminar productos',
        'slug'        => 'products.destroy',
        'description' => 'Eliminar productos del sistema',
      ]);
    }
}
