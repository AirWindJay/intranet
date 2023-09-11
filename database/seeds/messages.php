<?php

use Illuminate\Database\Seeder;

class messages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'message' 	       => 'Announcement Posted',
        ]);
        DB::table('messages')->insert([
            'message' 	       => 'Announcement Deleted',
        ]);
        DB::table('messages')->insert([
            'message' 	       => 'Announcement Updated',
        ]);
        DB::table('messages')->insert([
            'message' 	       => 'Message sent',
        ]);
    }
}
