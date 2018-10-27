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
        $user = User::create([
            'name' => 'Frank',
            'email' => 'davis.con.fab@gmail.com',
            'password' => bcrypt('conde123')
        ]);

        $this->call(AnimeTableSeeder::class);
    }
}
