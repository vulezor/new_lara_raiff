<?php

use Illuminate\Database\Seeder;

class MeasurementUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name'=>'Kilogram', 'initials'=>'KG'],
            ['name'=>'Litra', 'initials'=>'L'],
            ['name'=>'Tona', 'initials'=>'TO'],
            ['name'=>'Komad', 'initials'=>'ST'],
            ['name'=>'Pakovanje', 'initials'=>'PG']
        ];
        foreach($array as $key){
            DB::table('type_of_products')->insert([
                'name' => $key['name'],
                'initials' => $key['initials'],
            ]);
        }
    }
}
