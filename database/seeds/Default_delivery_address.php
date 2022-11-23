<?php

use Illuminate\Database\Seeder;

class Default_delivery_address extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('default_delivery_address')->insert(array(
            array(
              'country_name' => 'France',
              'country_flag' => 'france.png',
              'address1' => 'GALARDI France PARIS SARL',
              'code' => 'BI  000000',
              'address2' => 'SAINT LARDE',
              'address3' => 'FOSSES SAINT WITZ',
              'post_code' => '95470',
              'phone' => '33134722584'
            ), 
            array(
              'country_name' => 'Italy',
              'country_flag' => 'italy.png',
              'address1' => 'CENTRAL CARGO SRL',
              'code' => 'BI 000000',
              'address2' => 'VIA DI GONFIENTI, 4/2',
              'address3' => 'PRATO ITALY',
              'post_code' => '59100',
              'phone' => '+390558710295'
            )
          ));
    }
}
