<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=>'Tecno Mobile',
            "price"=>"200",
            "description"=>"A smartphone with a 4gb ram and much more features",
            "Category"=>"mobile",
            "galley"=>"",
           
        ]);
    }
}
