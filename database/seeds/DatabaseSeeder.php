<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // mandamos a llamar el seeder creado
        $this->call(PostsTableSeeder::class);
    }
}
