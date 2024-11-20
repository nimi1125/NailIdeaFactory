<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoverageRangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $CoverageRanges = [
            '公開',
            '非公開',
        ];

        foreach ($CoverageRanges as $CoverageRange) {
            DB::table('coverage_ranges')->insert([
                'status' => $CoverageRange,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
