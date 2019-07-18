<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'name'=>'Fizičko'
            ],[
                'name'=>'Pravno'
            ]
        ];
        foreach($array as $key=>$value){
            DB::table('client_types')->insert([
                'name' => $value 
            ]);
        }
        
    }
}
