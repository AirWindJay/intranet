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
        $this->call([
            Userseeder::class,
            ]);
        $this->call([
            messages::class,
            ]);
        $this->call([
            audioseeder::class,
            ]);
        $this->call([
            dateseeder::class,
            ]);
        $this->call([
            wardseeder::class,
            ]);
    }
}