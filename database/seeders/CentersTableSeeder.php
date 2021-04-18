<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centers')->insert(array(
            array(
                'name' => 'Homagama Base Hospital',
                'address' => 'Homagama Base Hospital, Malapalla Road, Sri Lanka',
                'latitude' => 6.847467541261507,
                'longitude' => 79.99195395547046,
                'contactNumber' => '112 855 200'
            ),
            array(
                'name' => 'Apeksha Hospital',
                'address' => 'Apeksha Hospital, Maharagama 10280, Sri Lanka',
                'latitude' => 6.837478650796878, 
                'longitude' => 79.92026595362091,
                'contactNumber' => '112 850 252'
            ),
            array(
                'name' => 'Colombo South Teaching Hospital - Kalubowila',
                'address' => 'B229 Hospital Rd, Dehiwala-Mount Lavinia, Sri Lanka',
                'latitude' => 6.868752095524837,
                'longitude' => 79.87643603068524,
                'contactNumber' => '112 763 262'
            ),
            array(
                'name' => 'Teaching Hospital Ragama, Sri Lanka',
                'address' => 'Hospital Inner Road, Ragama',
                'latitude' => 7.029825595509658, 
                'longitude' => 79.92439349589844,
                'contactNumber' => '112959262'
            )
        ));
    }
}
