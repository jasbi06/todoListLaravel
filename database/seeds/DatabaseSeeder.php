<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }
    private static function seedUsers()
    {
        User::truncate();

        User::create([
            'name' => 'Usuario1',
            'email' => 'usuario1@hotel2mares.com',
            'password' => bcrypt('alumno')
        ]);
        User::create([
            'name' => 'Usuario2',
            'email' => 'usuario2@hotel2mares.com',
            'password' => bcrypt('alumno')
        ]);
    }
}
