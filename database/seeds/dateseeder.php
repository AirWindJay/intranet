<?php

use Illuminate\Database\Seeder;

class dateseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dates')->insert([
            'thismonth' 	       => '0',
            'nextmonth' 	       => '0',
        ]);

    }
}
