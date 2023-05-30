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
            "galley"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tecno-mobile.com%2Fphones%2Fproduct-list%2F&psig=AOvVaw2pLHjC96laKyL1Ke0OAs3G&ust=1685522555353000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCNC30p3TnP8CFQAAAAAdAAAAABAE",
           
        ]);
    }
}
