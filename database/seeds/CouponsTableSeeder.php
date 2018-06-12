<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
                           'code' => '12345asdf',
                           'type' => 'fixed',
                           'value' => 3000,
                       ]);
    
        Coupon::create([
                           'code' => '67890rewq',
                           'type' => 'percent',
                           'percent_off' => 20,
                       ]);
    }
}
