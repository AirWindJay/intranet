<?php

use Illuminate\Database\Seeder;
use App\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     * ROLE
     * 9=WEBMASTER
     * 1=CLIENTS
     * 2=OMCC ADMIN
     * 3=MEDIAL ADMIN
     * 4=NURSING ADMIN
     * 5=HOPSS ADMIN
     * 6=FINANCE ADMIN
     * 7=CCRU
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' 	       => 'webmaster',
            'lname' 	       => 'Urbien',
            'fname' 	       => 'Erwin',
            'mname' 	       => 'Cara',
            'ename' 	       => 'Jr.',
            'role' 	           => 9,
            'division' 	       => 1,
            'department' 	   => 90,
            'password'         => bcrypt('jhayjhay'),
        ]);
    }
}
