<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MorphSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('morph')->insert([
            [
                'name' => 'Gold 2022',
                'url' => 'https://10.10.10.10/gold2022',
                'active' => true,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Silver',
                'url' => 'https://10.10.10.10/silver2021',
                'active' => true,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ]
        ]);
    }
}
