<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'rol_id' => '1',
            'name' => 'Jorge',
            'email' => 'je.peralta@uniandes.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('111111'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'rol_id' => '3',
            'name' => 'Leandro',
            'email' => 'le.moreno910@uniandes.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('111111'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'rol_id' => '1',
            'name' => 'Laura',
            'name2' => 'Camila',
            'apellido' => 'Reyes',
            'apellido2' => 'Garcia',
            'email' => 'lc.reyes@uniandes.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('111111'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'rol_id' => '1',
            'name' => 'Paula',
            'name2' => 'Alejandra',
            'apellido' => 'Gonzalez',
            'apellido2' => 'Montoya',
            'email' => 'p.gonzalezm@uniandes.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('111111'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'rol_id' => '1',
            'name' => 'Diego',
            'name2' => 'Andres',
            'apellido' => 'Páez',
            'apellido2' => 'Barros',
            'email' => 'da.paezb@uniandes.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('111111'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'rol_id' => '1',
            'name' => 'Paola',
            'name2' => 'Alejandra',
            'apellido' => 'Estrella',
            'apellido2' => 'Bolaños',
            'email' => 'p-estrel@uniandes.edu.co',
            'email_verified_at' => now(),
            'password' => Hash::make('111111'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
