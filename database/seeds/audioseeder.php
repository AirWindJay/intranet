<?php

use Illuminate\Database\Seeder;

class audioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playaudios')->insert([
            'trigger' 	       => '0',
        ]);
    }
}
