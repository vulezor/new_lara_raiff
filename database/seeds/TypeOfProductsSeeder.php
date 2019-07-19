<?php

use Illuminate\Database\Seeder;

class TypeOfProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['kukuruz', 'psenica', 'suncokret', 'soja', 'jecam', 'hemija', 'seme', 'djubrivo'];
        foreach($array as $arr){
            DB::table('type_of_products')->insert([
                'name' => $arr 
            ]);
        }
    }
}
