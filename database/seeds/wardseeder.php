<?php

use Illuminate\Database\Seeder;

class wardseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL 3rd Flr (Neuro Science)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL 3rd Flr (PR)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL 4th Flr (Stn 1)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL 4th Flr (Stn 2)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'PEDIATRICS (CHARITY)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'PEDIATRICS (PR)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'PNCU',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'OB East Wing  (Main)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'OB - IMU',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'GYNE',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'SURGERY (East Wing)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'SURGERY (West Wing)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'SURGERY (Pay/Medicare)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'ORTHOPEDICS',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'ENT-HNS',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'OPHTHAMOLOGY',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'PSYCHIATRY  Bldg',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'IDB',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'PR SUITES Bldg 1 (1st & 2nd Flr)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'PR SUITES Bldg 2 (3rd Flr)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL NRS (CCU/MICU CMPLX) (Stn 3)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL 4th Flr (PR)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'PICU',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'OB-Gyne Payward',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL 5th Flr (Stn 1)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'SICU',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL 5th Flr (Stn 2)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL 4th Flr (Stn 3)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'MEDICAL 4th Flr (Stn 4)',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'ER',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'OPD',
        ]);
        DB::table('wards')->insert([
            'ward_name' 	       => 'OPERATING ROOM',
        ]);

    }
}
