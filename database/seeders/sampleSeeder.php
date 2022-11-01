<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userdata')->insert([
            'name' => 'GigaChad',
            'face' =>  "Chad.png",
            'gender' => 'Men',
            'age' => '20',
            'address' => 'Africa Zam Zam',
            'phone' => '1234568980'
        ]);

        DB::table('userdata')->insert([
            'name' => 'SlenderMan',
            'face' =>  "Men.jfif",
            'gender' => 'None',
            'age' => '99',
            'address' => 'In A Forest',
            'phone' => '11111111111'
        ]);

        DB::table('userdata')->insert([
            'name' => 'Polite Cat',
            'face' =>  "myman.png",
            'gender' => 'Choose',
            'age' => '10',
            'address' => 'Your House',
            'phone' => '555'
        ]);
    }
}

