<?php

use Illuminate\Database\Seeder;

class AnimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Anime::class, 150)->create();
    }
}
