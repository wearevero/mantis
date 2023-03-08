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
                'url' => 'http://10.10.10.10/gold2022',
                'active' => true,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Silver system',
                'url' => 'http://10.10.10.10/silver',
                'active' => true,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'IT Inventory',
                'url' => 'http://10.10.10.9:6080/index.php',
                'active' => true,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Inventaris system',
                'url' => 'http://10.10.10.4:8000/',
                'active' => true,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Veronique Handbook',
                'url' => 'http://10.10.10.4:3030',
                'active' => true,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'name' => 'Morph health',
                'url' => 'http://10.10.10.4:6969/health',
                'active' => true,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
        ]);
    }
}
