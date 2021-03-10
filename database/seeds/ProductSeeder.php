<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert ([
            [
                'prodName' => "POCO X3",
                'prodDescription' => "Cellphone",
                'Price' => 10000,
                'isAvailable' => TRUE
            ],
            [
                'prodName' => "Lam-Ang Lite",
                'prodDescription' => "Mechanical Keyboard",
                'Price' => 1500,
                'isAvailable' => TRUE
            ],
            [
                'prodName' => "Fantech X9 Thor",
                'prodDescription' => "Gaming Mouse",
                'Price' => 500,
                'isAvailable' => TRUE
            ],
            [
                'prodName' => "A4Tech HD 1080P",
                'prodDescription' => "Web Camera",
                'Price' => 400,
                'isAvailable' => TRUE
            ],
        ]);
    }
}
