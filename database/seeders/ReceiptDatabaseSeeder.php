<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReceiptDatabaseSeeder extends Seeder
{
    DB::table('receipt_dabase_data')->insert([
        ['id' => 2, 'app_type' => 'Verification', 'fee' => 700, 'head_code' => 1300],
        ['id' => 3, 'app_type' => 'IBCC Verification', 'fee' => 100, 'head_code' => 1200],
        ['id' => 4, 'app_type' => 'Duplicate DMC', 'fee' => 700, 'head_code' => 1150],
        ['id' => 5, 'app_type' => 'Revised DMC', 'fee' => 500, 'head_code' => 1500],
    ]);

    public function run(): void
    {
        //
    }
}
